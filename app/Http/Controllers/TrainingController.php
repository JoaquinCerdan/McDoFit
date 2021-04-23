<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Trainer;
use App\Room;
//Use \Carbon\Carbon;

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
        $trainers = Trainer::paginate(2);
        return view("insertTraining",["trainings"=>$t, "trainers"=>$trainers,'sort'=>$sort]);
    }

    public function insertTraining(Request $request){
        $training = new Training;
        $trainer = Trainer::first();
        $room = Room::first();

        //$carbon = new Carbon();
        $training->nombre = $request->input('nombre');
        $training->horario = $request->input('horario');
        $training->capacidad = $request->input('capacidad');
        $training->duracion = $request->input('duracion');
        $training->nivel = $request->input('nivel');
        //$training->created_at = $carbon->now();
        //$training->updated_at = $carbon->now();
        $training->trainer_id = $trainer->id;
        $training->room_id = $room->id;

        //$training->save();

        //return view("popup",['name'=>$training, 'accion'=>'insertado']);



        
        
        if( $training->nombre != null && $training->horario != null 
            && $training->capacidad != null && $training->duracion != null 
            && $training->nivel != null && $training->trainer_id != null && $training->room_id != null){
                $training->save();
                return view("popup",['name'=>$training, 'accion'=>'insertado']);
            }else{
                return view("insertTraining",["trainings"=>$training]);
            }
        

        
    }

    public function modifyTraining(Request $request,$id){
       
        //$carbon = new Carbon();
        $training = Training::findOrFail($id);
        $aux = $training->trainer_id;
        $aux2 = $training->room_id;

        if($request->has('nombre')){
            $training->nombre = $request->input('nombre');
            $training->horario = $request->input('horario');
            $training->capacidad = $request->input('capacidad');
            $training->duracion = $request->input('duracion');
            $training->nivel = $request->input('nivel');
            //$training->updated_at = $carbon->now();
            $training->trainer_id = $aux;
            $training->room_id = $aux2;
            $training->save();
        }

        $trainers = Trainer::paginate(2);

        return view('modifyTraining',['training'=>$training, "trainers"=>$trainers, 'accion'=>'insertado']);
        /*
        if($training->nombre != null && $training->horario != null 
            && $training->capacidad != null && $training->duracion != null 
            && $training->nivel != null){
            return view("popup",['name'=>$training,'accion'=>'insertado']);
            $training->save();
            return view("listaTrainingsAdmin",["trainings"=>$training]);
            }else
                return view("modifyTraining",["trainings"=>$training]);
        */
    }

    public function deleteTraining($id, Request $request){

        $training = Training::findOrFail($id);
        $training->delete();

        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $t = Training::orderBy($sort )->paginate(7);
        }else{
            $sort = null;
            $t = Training::paginate(7);
        }

        return view("listaTrainingsAdmin",["trainings"=>$t,'sort'=>$sort]);
        //return redirect('trainingsAdmin');
    }
}
