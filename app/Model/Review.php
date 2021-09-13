<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;

    protected $casts =[
        'review_date' => 'datetime'
    ];

    public function scopeActive($query)
    {
        return $query->whereStatus(1);
    }

    public function resort()
    {
        return $this->belongsTo('\App\Resort');
    }

    public function website()
    {
        return  $this->belongsTo('\App\website');
    }

    public function _type()
    {
        return $this->belongsTo('\App\Model\ReviewType', 'type');
    }

    public function _source()
    {
        return $this->belongsTo('\App\Model\ReviewSource','source');
    }
}
