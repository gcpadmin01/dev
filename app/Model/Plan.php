<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function getName($lang)
    {
        if ($lang == 'en') {
            return $this->name_en;
        }

        if ($lang == 'es') {
            return $this->name_es;
        }
    }
}
