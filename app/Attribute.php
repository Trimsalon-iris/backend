<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    function dog() {
        return $this->hasOne(Dog::class);
    }
}
