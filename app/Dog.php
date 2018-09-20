<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    function appointments() {
        return $this->hasMany(Appointment::class);
    }

    function pictures() {
        return $this->hasMany(DogPicture::class);
    }

    function owner() {
        return $this->belongsTo(Customer::class);
    }

    function treatment() {
        return $this->belongsTo(Treatment::class);
    }

    function attributes() {
        return $this->belongsTo(Attribute::class);
    }

    function race() {
        return $this->belongsTo(Race::class);
    }
}
