<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ResortRoom extends Model
{
    public $timestamps = false;

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
}