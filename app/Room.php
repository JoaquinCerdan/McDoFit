<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function machines(){
        return $this->hasMany("App\Machine");
    }

    public function trainings(){
        return $this->hasMany("App\Training");
    }

    public function staticmaterials(){
        return $this->hasMany("App\Staticmaterial");
    }
}
