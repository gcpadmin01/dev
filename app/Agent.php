<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword;
use Hash,stdClass;

class Agent extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_code',
    	'iata',
		'password',
		'email',
		'guest_title',
		'guest_first_name',
		'guest_last_name',
		'agency_name',
		'address_one',
		'address_two',
		'city',
		'state',
		'postal_code',
		'country',
		'phone_number',
		'fax_number',
		'created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function add(stdClass $data){
        $insert = [
            'type_code'        =>  $data->code,
            'iata'             =>  $data->iata,
            'password'         =>  Hash::make($data->psw),
            'email'            =>  $data->email,
            'guest_title'      =>  $data->guest_title,
            'guest_first_name' =>  $data->guest_firstname,
            'guest_last_name'  =>  $data->guest_lastname,
            'agency_name'      =>  $data->agency_name,
            'address_one'      =>  $data->address1,
            'address_two'      =>  $data->address2,
            'city'             =>  $data->city,
            'state'            =>  $data->state,
            'postal_code'      =>  $data->postal_code,
            'country'          =>  $data->country,
            'phone_number'     =>  $data->phone_number,
            'fax_number'       =>  $data->fax_number
        ];
        $register = static::create($insert);
        return is_numeric($register->id) ? $register->id:0;
    }

    public static function existIata(string $iata):bool{
        $exist = static::where('iata',$iata)->first();
        if(isset($exist)){
            return true;
        }
        return false;
    }

    public function resorts(){
        return $this->hasMany('App\Model\AgentResort','agents_id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
