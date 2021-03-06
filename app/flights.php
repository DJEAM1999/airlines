<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\partners;

class flights extends Model
{
    public function partnerid()
    {
        return $this->belongsTo('App\partners','Partner');
    }

    public function users(){
        return $this->belongsToMany('App\User','reservations','flight_id','user_id')->withTimestamps();
    }
}
