<?php

namespace App\GMS;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Artisan;


class GMSClient
{
    const HEADER_USER = 'x-tc-user-auth';
    const LOYALTY_USER = 'LoyaltyUser';
    const LOYALTY_USER_EXPIRE = 'loyaltyUserExpire';

    const LOYALTY_TOKEN = '/oauth/token?grant_type=client_credentials';
    const SIGN_IN = 'auth';
    const AUTH_PASSWORD = 'auth/password';
    const AUTH_SSO = 'oauth/sso';
    const ACCOUNT = 'account';

    private $enterpriceId = '';
    private $apiUser      = '';
    private $apiPassword  = '';

    private $tokenUrl  = "";
    private $domainApi = "";
    private $apiPath   = "";

    private $tokenLoyalty = "";
    public  $tokenUser    = "";

    private $client = null;

    private $stack;
    private $container;

    public $account = [
        'id'         => "",
        'repetitive' => 0,
        'memberInfo' => []
    ];

    public $errors = [];

    public static function check()
    {
        $app = app('App\GMS\GMSClient');
        return !$app->isGuest();
    }

    public static function user()
    {
        return app('App\GMS\GMSClient');
    }

    function __construct($enterpriceId, $apiUser, $apiPassword, $tokenLoyalty = "", $tokenUser = "", $tokenUrl = "", $domainApi = "", $apiPath = "", $LoyaltyAccount = "")
    {
        $this->enterpriceId = $enterpriceId;
        $this->apiUser      = $apiUser;
        $this->apiPassword  = $apiPassword;

        $this->tokenUrl  = $tokenUrl;
        $this->domainApi = $domainApi;
        $this->apiPath   = $apiPath;

        $this->tokenLoyalty = $tokenLoyalty;
        $this->tokenUser    = $tokenUser;

        $this->account = ($LoyaltyAccount != null) ? $LoyaltyAccount : $this->account;

        // Log de peticiones
        $this->container = [];
        $history         = Middleware::history($this->container);

        $this->stack = HandlerStack::create();
        // Add the history middleware to the handler stack.
        $this->stack->push($history);


        $this->client = new Client([
            'base_uri' => $this->domainApi . '/' . $this->apiPath . '/' . $this->enterpriceId . '/',
            //'timeout'  => 0,
            'handler'  => $this->stack,
            'verify'   => false
        ]);
    }

    public function getTokenLoyalty($force = false)
    {
        if (session('LoyaltyTokenExpire') > time() && session('LoyaltyToken', null) != null && !$force) {
            return session('LoyaltyToken');
        }

        $client = new Client([
            'base_uri' => $this->tokenUrl,
            'verify'   => false
        ]);

        $headers = [
            "Authorization" => "Basic " . base64_encode($this->apiUser . ':' . $this->apiPassword)
        ];

        $request = new Request('POST', "", $headers, "");

        try {
            $response = $client->send($request);
            $body     = $response->getBody();

            $body = json_decode($body, true);

            session([
                'LoyaltyToken'       => $body['access_token'],
                'LoyaltyTokenExpire' => time() + ($body['expires_in'] - 600)
            ]);
            $this->tokenLoyalty = $body['access_token'];

            return $body['access_token'];
        } catch (ClientException $e) {
            return "";
        }
    }

    public function getTokenUser($user, $password)
    {

        $memberCredentials = new \App\GMS\Models\MemberCredentials($user, $password);

        $body = [
            'credentials' => $memberCredentials->jsonSerialize(),
        ];

        $options = [
            'Authorization' => 'Bearer ' . $this->getTokenLoyalty()
        ];
        $body    = json_encode($body);
        $request = new Request('POST', Self::SIGN_IN, $options, $body);

        try {
            $response = $this->client->send($request);
            $this->updateTokenUser($response);

            $body                                    = json_decode($response->getBody(), true);
            $this->account['memberInfo']['memberID'] = $body['profile']['memberInfo']['memberID'];
            $this->account['memberInfo']['id']       = $body['profile']['id'];
            session(['LoyaltyAccount' => $this->account]);


        } catch (ClientException $e) {
            $body = json_decode($e->getResponse()->getBody(), true);

            if (isset($body['errors'])) {
                $this->setError($body['errors']);
            }

            throw $e;
        }

        return $this->tokenUser;
    }

    public function updateTokenUser($response)
    {
        $tokenUser = $response->getHeader('x-tc-user-auth')[0];
        $data      = [
            Self::LOYALTY_USER        => $tokenUser,
            Self::LOYALTY_USER_EXPIRE => time() + 1800
        ];
        session($data);
        //dd($data, session()->all());
        $this->tokenUser = $tokenUser;
    }

    /**
     * Is guest user
     *
     * @return boolean
     */
    public function isGuest()
    {

        if (session('LoyaltyTokenExpire', 0) < time() || session('LoyaltyToken', null) == null || session(Self::LOYALTY_USER_EXPIRE, 0) < time()) {
            $this->tokenUser    = "";
            $this->tokenLoyalty = "";

            session()->pull('LoyaltyToken', '');
            session()->pull('LoyaltyUser', '');
            session()->pull('LoyaltyAccount', '');
            session()->pull(Self::LOYALTY_USER_EXPIRE, '');

        }

        if (empty($this->tokenUser)) {
            return true;
        } else {
            return false;
        }
    }

    public function getName()
    {
        try {
            return $this->account['memberInfo']['name']['firstName'];
        } catch (\Exception $e) {
            return "";
        } catch (\ErrorException $e) {
            return "";
        }
    }

    public function getEmail()
    {
        try {
            return $this->account['memberInfo']['email'];
        } catch (\Exception $e) {
            return "";
        } catch (\ErrorException $e) {
            return "";
        }
    }

    public function isRepetitive()
    {
        if (array_key_exists('repetitive', $this->account)) {
            return $this->account['repetitive'] == 1;
        } else {
            return false;
        }
    }

    public function register($data)
    {
        $tokenLoyalty = $this->getTokenLoyalty();

        $fullName = explode(" ", $data['fullName']);

        $firstName = $fullName[0];
        $lastName  = "";

        foreach ($fullName as $key => $name) {
            if ($key == 0) {
                continue;
            }

            $lastName = $lastName . " " . $name;
        }

        $data = [
            "credentials" => [
                "loginID"  => $data['email'],
                "password" => $data['password']
            ],
            "profile"     => [
                "memberInfo" => [
                    "name" => [
                        "firstName" => $firstName,
                        "lastName"  => $lastName
                    ]
                ]
            ]
        ];

        $data = json_encode($data);

        $headers = [
            'Authorization' => 'Bearer ' . $this->getTokenLoyalty()
        ];
        $lang    = \App::getLocale();

        $request = new Request('POST', Self::ACCOUNT . "?language=" . $lang, $headers, $data);

        try {
            $response = $this->client->send($request);
            $body     = $response->getBody();
            $body     = json_decode($body, true);

        } catch (ClientException $e) {
            $body = json_decode($e->getResponse()->getBody(), true);

            if (isset($body['errors'])) {
                $this->setError($body['errors']);
            }
            throw $e;
        }
    }

    public function verifyEmail($email, $code)
    {
        $options = [
            'Authorization' => 'Bearer ' . $this->getTokenLoyalty(true)
        ];

        $body    = [
            'email' => $email,
            'code'  => $code
        ];
        $body    = json_encode($body);
        $request = new Request('PUT', 'auth/email', $options, $body);

        $status = [];

        try {
            $response = $this->client->send($request);
            $body     = json_decode($response->getBody(), true);

            $status = [
                'code'    => 200,
                'message' => 'Your account has been verified'
            ];

        } catch (ClientException $e) {
            $status = [
                'code'    => $e->getCode(),
                'message' => $e->getResponse()->getReasonPhrase()
            ];
        } catch (Exception $e) {
            $status = [
                'code'    => $e->getCode(),
                'message' => "Internal Server Error"
            ];
        }

        return $status;
    }

    public function login(string $user, string $password)
    {
        $tokenLoyalty = $this->getTokenLoyalty(true);

        if (empty($tokenLoyalty)) {
            return false;
        }

        $tokenUser = $this->getTokenUser($user, $password);

        if (empty($tokenUser)) {
            $tokenUser = $this->getTokenUser($user, $password);
            return false;
        }

        if (empty($tokenUser)) {
            return false;
        }

        $this->saveDbUser('email');

        return true;
    }

    public function ssoLogin($sso, $lang)
    {
        $options = [
            'Authorization' => 'Bearer ' . $this->getTokenLoyalty()
        ];

        $data = [
            'finalRedirectUrl' => route('gms.sign-up-sso', ['sso' => $sso]),
            'firstRedirectUrl' => route('gms.sign-up-sso', ['sso' => $sso]),
            'isClientSide'     => 'true',
            'language'         => $lang
        ];
        //$data = json_encode($data);
        //$query   = \GuzzleHttp\Psr7\build_query($data, false);
        $query  = \GuzzleHttp\Psr7\Query::build($data, false);
        $request = new Request('GET', Self::AUTH_SSO . '/' . $sso . '?' . $query, $options, "");
        try {
            $response = $this->client->send($request);
            $body     = $response->getBody();
            $body     = json_decode($body, true);
            return $body['redirectURL'];
        } catch (ClientException $e) {
            //dump($e);
            return false;
        }
    }

    public function ssoLoginWithOutEmail($sso, $email, $name)
    {
        $options = [
            'Authorization' => 'Bearer ' . $this->getTokenLoyalty()
        ];

        $data = [
            'email' => $email
        ];

        $data = json_encode($data);

        $request = new Request('POST', Self::AUTH_SSO . $sso, $options, $data);


        try {
            $response = $this->client->send($request);
            $body     = $response->getBody();
            $body     = json_decode($body, true);
            return $body['redirectURL'];
        } catch (ClientException $e) {
            dump($e);
            return false;
        }
    }

    public function ssoPostLogin($email, $ssoToken, $sso)
    {
        $options = [
            'Authorization' => 'Bearer ' . $this->getTokenLoyalty()
        ];

        $data = [
            'email' => $email,
            'token' => $ssoToken
        ];
        $data = json_encode($data);

        $request = new Request('PUT', Self::AUTH_SSO . '?verbose=PROFILE', $options, $data);

        try {

            $response = $this->client->send($request);
            $this->updateTokenUser($response);

            $body = $response->getBody();
            $body = json_decode($body, true);

            $this->account['memberInfo']['memberID'] = $body['profile']['memberInfo']['memberID'];
            $this->account['memberInfo']['id']       = $body['profile']['id'];
            session(['LoyaltyAccount' => $this->account]);

            $this->saveDbUser($sso);
            return true;
        } catch (ClientException $e) {
            //dd($e->getResponse()->getBody()->getContents());
            return false;
        }
    }

    public function emailResetPassword($email)
    {
        $options = [
            'Authorization' => 'Bearer ' . $this->getTokenLoyalty()
        ];

        $request = new Request('GET', Self::AUTH_PASSWORD . '/' . $email, $options, "");

        try {
            $response = $this->client->send($request);
            $retVal   = [
                'code'    => '200',
                'message' => 'We’ve sent you an email with a link to finish resetting your password'
            ];
        } catch (ClientException $e) {
            $body    = json_decode($e->getResponse()->getBody(), true);
            $message = "";

            if (isset($body['errors'])) {
                $message = $this->getErrorMessage($body['errors']);
            }

            $retVal = [
                'code'    => $e->getCode(),
                'message' => $message
            ];
        } catch (Exception $e) {
            $retVal = [
                'code'    => $e->getCode(),
                'message' => $e->getMessage()
            ];
        }
        return $retVal;
    }

    public function resetPassword($code, $email, $password)
    {
        $headers = [
            'Authorization' => 'Bearer ' . $this->getTokenLoyalty(true)
        ];

        $data = [
            'code'        => $code,
            'email'       => $email,
            'newPassword' => $password
        ];

        $data    = json_encode($data);
        $request = new Request('POST', Self::AUTH_PASSWORD, $headers, $data);
        $retVal  = [];

        try {
            $response = $this->client->send($request);
            $retVal   = [
                'code'    => 200,
                'message' => 'Your password was updated correctly'
            ];
        } catch (ClientException $e) {
            $body    = json_decode($e->getResponse()->getBody(), true);
            $message = "";

            if (isset($body['errors'])) {
                $message = $this->getErrorMessage($body['errors']);
            }
            $retVal = [
                'code'    => $e->getCode(),
                'message' => $message,
            ];

        } catch (Exception $e) {
            $retVal = [
                'code'    => $e->getCode(),
                'message' => "Internal Server Error"
            ];
        }

        return $retVal;
    }

    /**
     * Recupera la informacion de la cuenta
     *
     * @return \App\GMS\Messages\AccountRetriveRS
     * @throws ClientException
     */
    public function getAccount()
    {
        $options = [
            'Authorization'   => 'Bearer ' . $this->getTokenLoyalty(),
            Self::HEADER_USER => $this->tokenUser
        ];

        $userId = $this->account['memberInfo']['id'];

        $request = new Request('GET', Self::ACCOUNT . '/' . $userId, $options, "");

        $response = $this->client->send($request);
        $this->updateTokenUser($response);

        $body = json_decode($response->getBody(), true);

        $this->account['memberInfo'] = array_merge($this->account['memberInfo'], $body['memberInfo']);
        session(['LoyaltyAccount' => $this->account]);

        return new \App\GMS\Messages\AccountRetriveRS($body);
    }

    public function updateAccount($memberInfo)
    {
        $options = [
            'Authorization'   => 'Bearer ' . $this->getTokenLoyalty(),
            Self::HEADER_USER => $this->tokenUser
        ];

        $data = [
            'memberInfo' => $memberInfo,
            'consents'   => []
        ];

        $data   = json_encode($data);
        $userId = $this->account['memberInfo']['id'];

        $request = new Request('PUT', Self::ACCOUNT . '/' . $userId, $options, $data);

        $response = $this->client->send($request);
        $this->updateTokenUser($response);

        $body = json_decode($response->getBody(), true);
    }

    public function changePassword($oldPassword, $password)
    {
        $headers = [
            'Authorization'   => 'Bearer ' . $this->getTokenLoyalty(),
            Self::HEADER_USER => $this->tokenUser
        ];

        $data = [
            'email'       => $this->account['memberInfo']['memberID'],
            'newPassword' => $password,
            'oldPassword' => $oldPassword
        ];

        $data = json_encode($data);

        $request = new Request('PUT', Self::AUTH_PASSWORD, $headers, $data);

        try {

            $response = $this->client->send($request);
            $this->updateTokenUser($response);

        } catch (ClientException $e) {
            //dump($e);
            return false;
        }

        return true;
    }

    public function changeEmail($oldEmail, $email)
    {
        $headers = [
            'Authorization'   => 'Bearer ' . $this->getTokenLoyalty(),
            Self::HEADER_USER => $this->tokenUser
        ];

        $data = [
            "currentEmailAddress" => $oldEmail,
            "newEmailAddress"     => $email
        ];

        $data = json_encode($data);

        $userId = $this->account['memberInfo']['id'];

        $request = new Request('POST', Self::ACCOUNT . '/' . $userId . '/id', $headers, $data);

        try {
            $response = $this->client->send($request);
            $this->updateTokenUser($response);
        } catch (ClientException $e) {

        }

        return true;
    }

    public function getPastReservations()
    {
        $profileId = $this->account['memberInfo']['id'];

        $headers = [
            'Authorization'   => 'Bearer ' . $this->getTokenLoyalty(),
            Self::HEADER_USER => $this->tokenUser
        ];

        $request  = new Request('GET', Self::ACCOUNT . '/' . $profileId . '/reservation?type=PAST', $headers, "");
        $response = $this->client->send($request);
        $body     = json_decode($response->getBody(), true);

        return $body;
    }

    public function getReservations()
    {
        $profileId = $this->account['memberInfo']['id'];

        $headers = [
            'Authorization'   => 'Bearer ' . $this->getTokenLoyalty(),
            Self::HEADER_USER => $this->tokenUser
        ];

        $request  = new Request('GET', Self::ACCOUNT . '/' . $profileId . '/reservation?type=PAST', $headers, "");
        $response = $this->client->send($request);
        $body     = json_decode($response->getBody(), true);
        //$body = json_decode(require(__DIR__."/Test/past_reservations.php"), true);

        $request  = new Request('GET', Self::ACCOUNT . '/' . $profileId . '/reservation?type=CURRENT', $headers, "");
        $response = $this->client->send($request);
        $this->updateTokenUser($response);

        $bodyCurrent = json_decode($response->getBody(), true);
        //$bodyCurrent = json_decode(require(__DIR__."/Test/reservations.php"), true);

        $body = array_merge($body['reservations'], $bodyCurrent['reservations']);
        return new \App\GMS\Models\Reservations($body);
    }

    private function json($data)
    {
        $json = json_encode($data);
        return addslashes($json);
    }

    private function setError($errors)
    {
        $this->errors = $errors;
    }

    public function getErrorCode()
    {
        $code = "";
        foreach ($this->errors as $error) {
            if (isset($error['code'])) {
                $code = $error['code'];
                break;
            }
        }

        return $code;
    }

    public function getErrorMessage($errors = "")
    {
        if (!empty($errors)) {
            $message = "";
            if (is_array($errors)) {
                foreach ($errors as $error) {
                    if (isset($error['message'])) {
                        $message = $error['message'];
                        break;
                    }
                }
            }

            return $message;
        }

        if (!empty($this->errors)) {
            $message = "";
            foreach ($this->errors as $error) {
                if (isset($error['message'])) {
                    $message = $error['message'];
                    break;
                }
            }

            return $message;
        }
    }

    public function saveDbUser($loginType)
    {
        /**
         * Se agrega a segundo plano el proceso para actualizar la información del
         * usuario.
         */
        Artisan::queue('gms:user-update', [
            'tokenUser' => $this->tokenUser,
            'memberId'  => $this->account['memberInfo']['id'],
            'loginType' => $loginType
        ]);
        return null;
        //==========================================================================
        // Se guarda la informacion del login del usuario
        //==========================================================================
        //$account = $this->getAccount();

        //if ($account->memberInfo->email != "") {

        //    $user = \App\Model\SubscriptionUsers::firstOrNew(['uid' => strtolower($account->memberInfo->email)]);

        //    $acountCountry = $account->memberInfo->addresses->first()->country->code;
        //    if (!empty($acountCountry)){
        //        $user->country        = $account->memberInfo->addresses->first()->country->code;
        //    }

        //    $user->user_name      = $account->memberInfo->name->firstName . " " . $account->memberInfo->name->lastName;
        //    $user->state_province = $account->memberInfo->addresses->first()->stateProvince->code;
        //    $user->postal_code    = $account->memberInfo->addresses->first()->postalCode;
        //    $user->phone_number   = $account->memberInfo->phones->first()->phoneNumber;

        //    if (!empty($account->memberInfo->birthDate)) {
        //        $user->birth_date = $account->memberInfo->birthDate;
        //    }


        //    if ($user->repetitive == 0) {
        //        $body = $this->getPastReservations();
        //        if (count($body['reservations']) > 0) {
        //            $user->repetitive = 1;
        //        }
        //    }

        //    $user->save();
        //    $this->account['repetitive'] = $user->repetitive;
        //    session(['LoyaltyAccount' => $this->account]);

        //    $module = \App\Model\SubscriptionModule::firstOrNew([
        //        'subscription_user_id' => $user->id,
        //        'login_module_id'      => 1
        //    ]);

        //    switch ($type) {
        //        case 'email':
        //            $module->email = 1;
        //            break;
        //        case 'facebook':
        //            $module->facebook = 1;
        //            break;
        //        case 'google':
        //            $module->google = 1;
        //            break;
        //    }

        //    $module->save();

        //}
    }

    public function saveReservationData($user)
    {

    }

    public function saveDomain()
    {
        $profileId = $this->account['memberInfo']['id'];

        $headers = [
            'Authorization'   => 'Bearer ' . $this->getTokenLoyalty(),
            Self::HEADER_USER => $this->tokenUser
        ];

        $request  = new Request('GET', Self::ACCOUNT . '/' . $profileId . '/preferences', $headers, "");
        $response = $this->client->send($request);
        $body     = json_decode($response->getBody(), true);

        $domainRegistered = "";
        $preferenceDomain = [];
        foreach ($body['preferences'] as $preference) {
            if ($preference['ID'] == '128540') {
                $preferenceDomain = $preference;
                if (count($preference['answers']) > 0) {
                    $domainRegistered = $preference['answers'][0];
                }
            }
        }

        if ($domainRegistered == "") {
            $preferenceDomain['answers'][] = "royalreservations.com";
            $data                          = [
                "preferences" => [
                    $preferenceDomain
                ]
            ];
            $data                          = json_encode($data);
            try {
                $request  = new Request('POST', Self::ACCOUNT . '/' . $profileId . '/preferences', $headers, $data);
                $response = $this->client->send($request);
            } catch (\Throwable $th) {
            }
        }

        return $body;
    }

}