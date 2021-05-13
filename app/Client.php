<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function trainer(){
        return $this->belongsTo("App\Trainer");
    }

    public function machines(){
        return $this->belongsToMany("App\Machine");
    }

    public function trainings(){
        return $this->belongsToMany("App\Training");
    }

    public function rentalmaterials(){
        return $this->hasMany("App\Rentalmaterial");
    }
}
