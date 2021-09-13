<?php

namespace App\Http\Controllers;

use App\GMS\GMSClient;
use App\Model\Concept;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class GmsController extends Controller
{
    //===================================================================
    // Vista del login
    //===================================================================
    public function signUp(Request $request, GMSClient $gmsClient)
    {
        $email     = $request->input('email', "");
        $code      = $request->input('code', "");
        $validated = [];

        if (!empty($email) && !empty($code)) {
            $validated = $gmsClient->verifyEmail($email, $code);
        }

        $concepts = Concept::vigencia(['vig' => true])
            ->visibility(Concept::VIEW_WEB)
            ->with(['content' => function ($query) {
                $query->lang(\App::getLocale());
            }])
            ->join('section_concept', function ($query) {
                $query->on('section_concept.id_concept', '=', 'concepts.id')
                    ->where('section_concept.id_section', '=', Concept::SEC_GMS);
            })
            ->orderBy('order', 'asc')
            ->limit(2)
            ->get();

        return view('gms.signUp', [
            'page'      => 'gms-sign-up',
            'concepts'  => $concepts,
            'validated' => $validated
        ]);
    }

    //===================================================================
    // Validacion del login (Email, Facebook, Google)
    //===================================================================
    public function postSignUp(Request $request, GMSClient $gmsClient)
    {
        //$gmsClient->getTokenLoyalty(true);

        $type     = $request->input('sso');
        $user     = $request->input('user');
        $password = $request->input('password');

        try {
            switch ($type) {
                case 'facebook':
                case 'google':
                    $ssoLogin = $gmsClient->ssoLogin($type, \App::getLocale());
                    if ($ssoLogin != false) {
                        return redirect($ssoLogin);
                    } else {
                        return redirect()->route('gms.sign-up')->with('error', __('gms.error_login'));
                    }
                    break;
                case 'plt-Facebook':
                    $email = $request->input('email');
                    $name  = $request->input('name');

                    $ssoLogin = $gmsClient->ssoLoginWithOutEmail('facebook', $email, $name);

                    break;
                default:
                    $login = $gmsClient->login($user, $password);
                    if ($login === true) {
                        return redirect()->route('gms.dashboard');
                    } else {
                        return redirect()->route('gms.sign-up')->with('error', __('gms.error_login'));
                    }
                    break;
            }
        } catch (ClientException $e) {
            // Usuario no verificado
            return redirect()->route('gms.sign-up')->with('loyalty-error', __('gms.' . $gmsClient->getErrorCode()));
        } catch (\Exception $e) {
            return redirect()->route('gms.sign-up')->with('error', __('gms.error_code') . $e->getMessage());
        }
    }

    //===================================================================
    // Se valida el token en caso de ser un login por facebook o google 
    //===================================================================
    public function getSignUpSso(Request $request, GMSClient $gmsClient)
    {
        $action       = $request->input('action', 'LOGIN');
        $zdAction     = $request->input('zdAction', '');
        $platform     = $request->input('platform', '');
        $email        = $request->input('email', '');
        $zdToken      = $request->input('zdToken', '');
        $errorMessage = $request->input('errorMessage', "There was an error while logging in.");
        $sso          = $request->input('sso', '');

        if (!empty($zdToken)) {
            try {
                $login = $gmsClient->ssoPostLogin($email, $zdToken, $sso);
            } catch (\Exception $e) {
                return redirect()->route('gms.sign-up')->with('error', __('gms.error_code') . $e->getMessage());
            }

            if ($login === true) {
                return redirect()->route('gms.dashboard');
            } else {
                return redirect()->route('gms.sign-up')->with('error', __('gms.error_login'));
            }
        } else {
            //=====================================================================================================
            // En caso de que el social login no regrese un email se manda la pagina de registro con email
            //=====================================================================================================
            return redirect()->route('gms.sign-up')->with('error', $errorMessage);
        }

    }

    //===================================================================
    // Vista para actualizar la contraseña
    //===================================================================
    public function resetPassword(Request $request)
    {
        $code  = $request->input('code', '');
        $email = $request->input('email', '');

        $step = (!empty($code) && !empty($email)) ? 2 : 1;


        return view('gms.resetPassword', [
            'page'  => 'gms-reset-password',
            'code'  => $code,
            'email' => $email,
            'step'  => $step,
            'js_v2' => 'js_v2'

        ]);
    }

    public function postResetPassword(Request $request, GMSClient $gmsClient)
    {
        $email    = $request->input('email', '');
        $code     = $request->input('code', '');
        $password = $request->input('password', '');
        $step     = $request->input('step', 1);

        if ($step == 2) {
            $response = $gmsClient->resetPassword($code, $email, $password);
        }

        if ($step == 1) {
            $response = $gmsClient->emailResetPassword($email);
        }

        if ($response['code'] == 200) {
            return redirect()->route('gms.sign-up')->with('success', $response['message']);
        } else {
            return redirect()->route('gms.reset-your-pasword')->with('error', $response['message']);
        }

    }


    public function register(Request $request)
    {
        $concepts = Concept::vigencia(['vig' => true])
            ->visibility(Concept::VIEW_WEB)
            ->with(['content' => function ($query) {
                $query->lang(\App::getLocale());
            }])
            ->join('section_concept', function ($query) {
                $query->on('section_concept.id_concept', '=', 'concepts.id')
                    ->where('section_concept.id_section', '=', Concept::SEC_GMS);
            })
            ->orderBy('order', 'asc')
            ->limit(2)
            ->get();


        return view('gms.register', [
            'page'     => 'gms-register',
            'concepts' => $concepts,
            'js_v2'    => true
        ]);
    }


    public function postRegister(Request $request, GMSClient $gmsClient)
    {

        $data = [
            'fullName' => $request->input('name'),
            'email'    => $request->input('email'),
            'password' => $request->input('password')
        ];

        try {
            $user = \App\Model\SubscriptionUsers::firstOrNew(['uid' => strtolower($request->input('email'))]);
            if (empty($user->country) && !$request->input('country')) {
                $user->country = $request->input('country');
                $user->save();
            }

            $gmsClient->register($data);
            return redirect()->route('gms.sign-up')
                ->with('success', __('gms.confirm your email'));
        } catch (ClientException $e) {
            // Usuario ya existe
            //if ($gmsClient->getErrorCode() == 'LTY103') {
            return redirect()->route('gms.sign-up')
                ->with('loyalty-error', $gmsClient->getErrorCode() . " " . __('gms.' . $gmsClient->getErrorMessage()));
            //}
        }

    }

    public function dashboard(Request $request, GMSClient $gmsClient)
    {

        $gmsClient->getTokenLoyalty();
        //===================================================================
        // Se verifica si el usuario inicio sesión
        //===================================================================
        if ($gmsClient->isGuest()) {
            $this->resetLogin();
            return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
        }

        //===================================================================
        // Se recupera la información del usuario
        //===================================================================
        try {
            $account = $gmsClient->getAccount();
            //$gmsClient->saveDomain();
        } catch (ClientException $e) {
            if ($e->getResponse()->getStatusCode() == 403) {
                $this->resetLogin();
                return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
            } else {
                return redirect()->route('gms.sign-up')->with('error' . __('gms.request_erro'));
            }
        } catch (\Exception $e) {
            return redirect()->route('gms.sign-up')->with('error', __('gms.error_code') . $e->getMessage());
        }

        $concepts = Concept::vigencia(['vig' => true])
            ->visibility(Concept::VIEW_WEB)
            ->with(['content' => function ($query) {
                $query->lang(\App::getLocale());
            }])
            ->join('section_concept', function ($query) {
                $query->on('section_concept.id_concept', '=', 'concepts.id')
                    ->where('section_concept.id_section', '=', Concept::SEC_GMS);
            })
            ->orderBy('order', 'asc')
            ->limit(2)
            ->get();


        return view('gms.dashboard', [
            'account'  => $account,
            'page'     => 'gms.dashboard',
            'concepts' => $concepts
        ]);
    }

    public function reservations(Request $request, GMSClient $gmsClient)
    {
        //===================================================================
        // Se verifica si el usuario inicio sesión
        //===================================================================


        if ($gmsClient->isGuest()) {
            $this->resetLogin();
            return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
        }

        try {
            $reservations = $gmsClient->getReservations();
        } catch (ClientException $e) {
            if ($e->getResponse()->getStatusCode() == 403) {
                $this->resetLogin();
                return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
            } else {
                return redirect()->route('gms.sign-up')->with('error' . __('gms.request_erro'));
            }
        } catch (\Exception $e) {
            return redirect()->route('gms.sign-up')->with('error', __('gms.error_code') . $e->getMessage());
        }

        $pastReservations    = [];
        $currentReservations = [];
        $nextReservations    = [];
        foreach ($reservations as $reservation) {
            switch ($reservation->getStatus()) {
                case $reservation::PASADA:
                    $pastReservations[] = $reservation;
                    break;
                case $reservation::PROXIMA:
                    $nextReservations[] = $reservation;
                    break;
            }
        }

        return view('gms.reservations', [
            'page'             => 'gms-reservations',
            'reservations'     => $reservations,
            'pastReservations' => $pastReservations,
            'nextReservations' => $nextReservations,
            'js_v2'            => true

        ]);
    }

    public function accountManagement(Request $request, GMSClient $gmsClient)
    {
        //===================================================================
        // Se verifica si el usuario inicio sesión
        //===================================================================
        if ($gmsClient->isGuest()) {
            $this->resetLogin();
            return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
        }

        return view('gms.accountManagement', [
            'page'  => 'gms-account-management',
            'js_v2' => true
        ]);
    }

    public function changePassword(Request $request, GMSClient $gmsClient)
    {
        $oldPassword     = $request->input('oldPassword');
        $password        = $request->input('password');
        $passwordConfirm = $request->input('passwordConfirm');


        if ($gmsClient->isGuest()) {
            $this->resetLogin();
            return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
        }

        try {
            if ($password == $passwordConfirm) {
                $changePassword = $gmsClient->changePassword($oldPassword, $password);
                if ($changePassword) {
                    return redirect()->route('gms.account-management')->with('success', __('gms.updated_password'));
                } else {
                    return redirect()->route('gms.account-management')->with('success', __('gms.error_updated_password'));
                }
            }
        } catch (ClientException $e) {
            if ($e->getResponse()->getStatusCode() == 403) {
                $this->resetLogin();
                return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
            } else {
                return redirect()->route('gms.sign-up')->with('error' . __('gms.request_erro'));
            }
        } catch (\Exception $e) {
            return redirect()->route('gms.sign-up')->with('error', __('gms.error_code') . $e->getMessage());
        }
    }

    public function changeEmail(Request $request, GMSClient $gmsClient)
    {
        $oldEmail     = $request->input('oldEmail');
        $email        = $request->input('email');
        $emailConfirm = $request->input('emailConfirm');

        dump($gmsClient);

        if ($email == $emailConfirm) {
            $cahngeEmail = $gmsClient->changeEmail($oldEmail, $email);
            if ($cahngeEmail) {
                dump('Se actualizo correctamente el correo');
            } else {
                dump("Error a actualizar el correo");
            }
        }
    }

    public function personalInformation(Request $request, GMSClient $gmsClient)
    {
        if ($gmsClient->isGuest()) {
            $this->resetLogin();
            return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
        }

        try {
            $account = $gmsClient->getAccount();
        } catch (ClientException $e) {
            if ($e->getResponse()->getStatusCode() == 403) {
                $this->resetLogin();
                return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
            } else {
                return redirect()->route('gms.sign-up')->with('error' . __('gms.request_erro'));
            }
        } catch (\Exception $e) {
            return redirect()->route('gms.sign-up')->with('error', __('gms.error_code') . $e->getMessage());
        }

        return view('gms.personalInformation', [
            'account' => $account,
            'page'    => 'gms-personal-information',
            'js_v2'   => true
        ]);
    }

    public function postPersonalInformation(Request $request, GMSClient $gmsClient)
    {
        try {
            $gmsClient->updateAccount($request->input('memberInfo'));

            return redirect()->route('gms.personal-information')->with('success', __('gms.updated_account'));

        } catch (ClientException $e) {
            if ($e->getResponse()->getStatusCode() == 403) {
                $this->resetLogin();
                return redirect()->route('gms.sign-up')->with('error' . __('gms.session_expired'));
            } else {
                return redirect()->route('gms.sign-up')->with('error' . __('gms.request_erro'));
            }
        } catch (\Exception $e) {
            return redirect()->route('gms.sign-up')->with('error', __('gms.error_code') . $e->getMessage());
        }
    }

    public function preferences(Request $request)
    {
        return view('gms.preferences', [
            'page' => 'gms-preferemces'
        ]);
    }

    public function configuration(Request $request)
    {
        return view('gms.configuration', [
            'page' => 'gms-configuration'
        ]);
    }

    public function logOut(Request $request)
    {
        $this->resetLogin();
        return redirect()->route('gms.sign-up');
    }

    public function resetLogin()
    {
        session()->pull('LoyaltyToken', '');
        session()->pull('LoyaltyUser', '');
        session()->pull('LoyaltyAccount', '');
        session()->pull('LoyaltyTokenExpire', '');
        session()->pull('loyaltyUserExpire', '');
    }

    public function updateUser(Request $request)
    {
        $tokenUser = $request->input('t');
        $memberId  = $request->input('m');
        $loginType = $request->input('l');
        $module    = $request->input('ml');

        $data = Artisan::queue('gms:user-update', [
            'tokenUser' => $tokenUser,
            'memberId'  => $memberId,
            'loginType' => $loginType,
            'module'    => $module
        ]);

        return response()->json([
            'data' => $data
        ]);
    }

    public function isRepetitive(Request $request)
    {
        $request->validate([
            'i' => 'required|email'
        ]);

        $email = $request->input('i');

        $isRepetitive = DB::table('supscription_users')
            ->where('uid', $email)
            ->first();
        if (empty($isRepetitive)) {
            return 'false';
        }

        return response($isRepetitive->repetitive === 1 ? 'true' : 'false');
    }

    // ==================================================================================
    // Redirect para royal uno
    // ==================================================================================
    public function royaluno(Request $rq)
    {
        $inputs          = $rq->all();
        $inputs['email'] = base64_encode($inputs['email']);
        $query           = http_build_query($inputs);

        return redirect()->to($rq->input('next').'?' . $query );

    }
}
