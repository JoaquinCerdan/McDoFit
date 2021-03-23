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
}
