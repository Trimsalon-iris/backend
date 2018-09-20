<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    function customer() {
        return $this->hasOne(Customer::class);
    }
}
