<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    function dog() {
        return $this->belongsTo(Dog::class);
    }

    function treatment() {
        return $this->belongsTo(Treatment::class);
    }
}
