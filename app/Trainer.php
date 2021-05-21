<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    public function clients(){
        return $this->hasMany("App\Client");
    }

    public function trainings(){
        return $this->hasMany("App\Training");
    }

    public function user(){
        return $this->hasOne("App\User");
    }
}
