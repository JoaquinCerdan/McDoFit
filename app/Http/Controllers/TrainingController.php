<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;

class TrainingController extends Controller
{
    //
    public function listTrainings() {

        $t = Training::all();
    
        return view("listaTrainings",["trainings"=>$t]);
    
    }
}
