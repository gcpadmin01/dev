<?php

namespace App\Console\Commands;

use App\GMS\Filters\PastReservationsFilter;
use App\GMS\GMSClient;
use App\Model\SubscriptionReservation;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GmsUserUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *  gms:user-update  eyJhbGciOiJIUzUxMiJ9.eyJleHAiOjE2MjIxMzgwNDUsImp0aSI6InUzN2gzYnczM2gzOWozNWozN3kzMnAwMDoxMjRhMjFqMWUzMDAifQ._My0ZYYR_FWA1l5ErNpiIgH04RqodewsM-QpAGzh7SZdSazxGggjBmUMr14JBNoR-VFFiDrXBVl5d92iCBcqzA c2lvbmVudjcxMkBnbWFpbC5jb20= email 2
     *
     * @var string
     */
    protected $signature = 'gms:user-update {tokenUser} {memberId} {loginType} {module=1} {--queue=} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(GMSClient $gms)
    {
        //sleep(30);

        $tokenUser = $this->argument('tokenUser');
        $memberId  = $this->argument('memberId');
        $loginType = $this->argument('loginType');
        $module    = $this->argument('module');

        $gms->tokenUser                   = $tokenUser;
        $gms->account['memberInfo']['id'] = $memberId;

        $account      = $gms->getAccount();
        $reservations = $gms->getReservations();
        $accountEmail = $account->memberInfo->email;

        if (empty($accountEmail)) {
            return null;
        }

        $user = \App\Model\SubscriptionUsers::firstOrNew(['uid' => Str::lower($account->memberInfo->email)]);

        $gms->saveDomain();
        $this->updateUserData($user, $account, $reservations, $loginType, $module);
        $this->updateReservationsData($user, $reservations);

        return 0;
    }

    public function updateUserData($user, $account, $reservations, $loginType, $module)
    {
        $acountCountry = $account->memberInfo->addresses->first()->country->code;
        if (!empty($acountCountry)) {
            $user->country = $account->memberInfo->addresses->first()->country->code;
        }

        $user->user_name      = $account->memberInfo->name->firstName . " " . $account->memberInfo->name->lastName;
        $user->state_province = $account->memberInfo->addresses->first()->stateProvince->code;
        $user->postal_code    = $account->memberInfo->addresses->first()->postalCode;
        $user->phone_number   = $account->memberInfo->phones->first()->phoneNumber;

        if (!empty($account->memberInfo->birthDate)) {
            $user->birth_date = $account->memberInfo->birthDate;
        }

        if ($user->repetitive == 0) {
            $reservationsPast = new PastReservationsFilter($reservations);
            if (iterator_count($reservationsPast) > 0) {
                $user->repetitive = 1;
            }
        }

        $date             = date('Y-m-d H:m:s');
        $user->last_login = $date;
        $user->save();

        $module = \App\Model\SubscriptionModule::firstOrNew([
            'subscription_user_id' => $user->id,
            'login_module_id'      => $module
        ]);

        switch ($loginType) {
            case 'email':
                $module->email = 1;
                break;
            case 'facebook':
                $module->facebook = 1;
                break;
            case 'google':
                $module->google = 1;
                break;
        }
        $module->save();


    }

    public function updateReservationsData($user, $reservations)
    {
        $reservationsDatabase = SubscriptionReservation::query()
            ->where('subscription_user_id', $user->id)
            ->get();

        $resCancelation = $reservationsDatabase;

        foreach ($reservations as $reservation) {

            $resApiId = $reservation->reservationID;
            $resDb    = $reservationsDatabase->where('reservation_id', $resApiId);

            if ($resDb->count() > 0) {
                $this->updateReservationDatabase($resDb->first(), $reservation);

                $resCancelation = $resCancelation->filter(function ($value, $key) use ($resApiId) {
                    return $value->reservation_id != $resApiId;
                });

            } else {
                $this->saveNewReservation($user, $reservation);
            }
        }

        foreach ($resCancelation as $res) {
            $this->reservationCancel($res);
        }

    }

    private function updateReservationDatabase($resDb, $resApi)
    {
        $resDb->rooms     = $resApi->numberOfRooms;
        $resDb->adults    = $resApi->numberOfAdults;
        $resDb->children  = $resApi->numberOfChildren;
        $resDb->currency  = $resApi->currency;
        $resDb->check_in  = $resApi->checkInDate;
        $resDb->check_out = $resApi->checkOutDate;
        $resDb->total     = $resApi->totalAmount;
        $resDb->save();

    }

    private function saveNewReservation($user, $resApi)
    {
        $resDb = new SubscriptionReservation();

        $resDb->reservation_id       = $resApi->reservationID;
        $resDb->subscription_user_id = $user->id;
        $resDb->hotel_id             = $resApi->bookingEngine['Id'];
        $resDb->hotel_name           = $resApi->propertyName;
        $resDb->rooms                = $resApi->numberOfRooms;
        $resDb->adults               = $resApi->numberOfAdults;
        $resDb->children             = $resApi->numberOfChildren;
        $resDb->currency             = $resApi->currency;
        $resDb->check_in             = $resApi->checkInDate;
        $resDb->check_out            = $resApi->checkOutDate;
        $resDb->total                = $resApi->totalAmount;
        $resDb->save();
    }

    private function reservationCancel($resDb)
    {
        $resDb->reservation_status = 2;
        $resDb->save();
    }
}
