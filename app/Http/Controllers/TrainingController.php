<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;

class TrainingController extends Controller
{
    //
    public function listTrainings(Request $request) {
        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $m = Training::orderBy($sort )->paginate(2);
        }else{
            $sort = null;
            $m = Training::paginate(2);
        }
        return view("listaTrainings",["trainings"=>$m,'sort'=>$sort]);
    }
}
