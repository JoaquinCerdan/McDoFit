<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function rooms(){
        return $this->belongsTo("App\Room");
    }

    public function trainers(){
        return $this->belongsTo("App\Trainer");
    }

    public function clients(){
        return $this->belongsToMany("App\Client");
    }
}
