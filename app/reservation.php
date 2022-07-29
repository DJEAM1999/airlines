<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\flights;
use App\User;

class reservation extends Model
{
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function flighte(){
        return $this->belongsTo('App\flights','flight_id');
    }
}
