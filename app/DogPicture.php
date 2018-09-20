<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DogPicture extends Model
{
    function dog() {
        return $this->belongsTo(Dog::class);
    }
}
