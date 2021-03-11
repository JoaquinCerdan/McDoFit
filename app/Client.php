<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function trainers(){
        return $this->hasMany("App\Trainer");
    }
}
