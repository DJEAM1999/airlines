<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\flights;

class partners extends Model
{
    public function flight()
    {
        return $this->hasMany('App\flights');
    }
}
