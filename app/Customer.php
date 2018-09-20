<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    function address() {
        return $this->belongsTo(Address::class);
    }

    function dogs() {
        return $this->hasMany(Dog::class);
    }
}
