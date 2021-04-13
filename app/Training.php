<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function room(){
        return $this->belongsTo("App\Room");
    }

    public function trainer(){
        return $this->belongsTo("App\Trainer");
    }

    public function clients(){
        return $this->belongsToMany("App\Client");
    }
}
