<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    function dogs() {
        return $this->hasMany(Dog::class);
    }
}
