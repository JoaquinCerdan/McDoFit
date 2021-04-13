<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    public function clients(){
        return $this->belongsToMany("App\Client");
    }

    public function room(){
        return $this->belongsTo("App\Room");
    }
}
