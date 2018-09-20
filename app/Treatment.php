<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    function appointment() {
        return $this->hasOne(Appointment::class);
    }

    function dog() {
        return $this->hasOne(Dog::class);
    }
}
