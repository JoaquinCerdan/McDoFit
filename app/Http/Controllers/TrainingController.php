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

    public function listTrainingsAdmin(Request $request) {
        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $t = Training::orderBy($sort )->paginate(2);
        }else{
            $sort = null;
            $t = Training::paginate(2);
        }
        return view("listaTrainingsAdmin",["trainings"=>$t,'sort'=>$sort]);
    }

    public function addTraining(Request $request) {
        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $t = Training::orderBy($sort )->paginate(2);
        }else{
            $sort = null;
            $t = Training::paginate(2);
        }
        return view("insertTraining",["trainings"=>$t,'sort'=>$sort]);
    }

    public function insertTraining(Request $request){
        $training = new Training;
        $training->nombre = $request->input('nombre');
        $training->horario = $request->input('horario');
        $training->capacidad = $request->input('capacidad');
        $training->duracion = $request->input('duracion');
        $training->nivel = $request->input('nivel');
        $training->save();

        return view("popup",['name'=>$training,'accion'=>'insertado']);
    }

    public function modifyTraining(Request $request,$id){

        $training = Training::findOrFail($id);
        if($request->has('nombre')){
            $training->nombre = $request->input('nombre');
            $training->horario = $request->input('horario');
            $training->capacidad = $request->input('capacidad');
            $training->duracion = $request->input('duracion');
            $training->nivel = $request->input('nivel');
            $training->save();
        }
        
            return view('modifyTraining',['training'=>$training,'accion'=>'insertado']);
    }

    public function deleteTraining($id){

        $t = Training::findOrFail($id);
        $t->delete();

        return redirect('trainingsAdmin');
    }
}
