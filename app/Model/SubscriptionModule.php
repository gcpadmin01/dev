<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use stdClass;

class SubscriptionModule extends Model
{
    public $timestamps  = false;
    protected $table = "subscription_module";
    protected $fillable = ['subscription_user_id', 'login_module_id'];
}
