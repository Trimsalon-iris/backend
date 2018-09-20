<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingHours extends Model
{
    function user() {
        return $this->hasOne(User::class);
    }
}
