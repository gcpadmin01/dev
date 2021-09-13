<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class RoomMinRate extends Model
{
    protected  $fillable = ['resort_id','room_code', 'currency']; 

    protected $casts = [
        'date_start' => 'date',
        'date_end' => 'date'
    ];

}