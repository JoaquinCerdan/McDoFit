<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Trainer;
use App\Room;
Use \Carbon\Carbon;

class TrainingController extends Controller
{

    public function listTrainings(Request $request) {

        $t = Training::all();
        return view("listaTrainings",["trainings"=>$t]);
    }

    public function listTrainingsAdmin(Request $request) {
        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $t = Training::orderBy($sort )->paginate(7);
        }else{
            $sort = null;
            $t = Training::paginate(7);
        }
        return view("listaTrainingsAdmin",["trainings"=>$t,'sort'=>$sort]);
    }

    public function addTraining(Request $request) {
        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $t = Training::orderBy($sort )->paginate(7);
        }else{
            $sort = null;
            $t = Training::paginate(7);
        }
        $trainers = Trainer::all();
        return view("insertTraining",["trainings"=>$t, "trainers"=>$trainers,'sort'=>$sort]);
    }

    public function insertTraining(Request $request){
        $training = new Training;
        $trainer = Trainer::all();
        $room = Room::first();

        //$carbon = new Carbon();
        $training->nombre = $request->input('nombre');
        $training->horario = $request->input('horario');
        $training->capacidad = $request->input('capacidad');
        $training->duracion = $request->input('duracion');
        $training->nivel = $request->input('nivel');
        //$training->created_at = $carbon->now();
        //$training->updated_at = $carbon->now();
        $training->trainer_id = $request->input('entrenador');;
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
        $aux2 = $training->room_id;

        if($request->has('nombre')){
            $training->nombre = $request->input('nombre');
            $training->horario = $request->input('horario');
            $training->capacidad = $request->input('capacidad');
            $training->duracion = $request->input('duracion');
            $training->nivel = $request->input('nivel');
            //$training->updated_at = $carbon->now();
            $training->trainer_id = $request->input('entrenador');
            $training->room_id = $aux2;
            $training->save();
        }

        $trainers = Trainer::all();

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

        //return view("listaTrainingsAdmin",["trainings"=>$training]);
        return redirect('listTrainingsAdmin');
    }

    //esta funcion es unica y exclusivamente para que me devuelva la vista de "sobre nosotros"
    public function sobreNosotros(){

        return view('sobreNosotros');
    }


    //esta funcion es unica y exclusivamente hacer las estadisticas
    public function estadisticas(){
        $minutosTotal = 0;
        $cont = 0;
        $nivelMedio = 0;
        $nivelAvanzado = 0;
        $nivelBasico = 0;
        $carbon = new Carbon();
        $fechaActual = $carbon->toDateString();

        $trainings = Training::all();
        //$trainings2 = Training::where('horario',$fechaActual)

        foreach ($trainings as $training){
            $cont = $cont + 1;
            $minutosTotal = $minutosTotal + $training->duracion;
            if($training->nivel == "Medio"){
                $nivelMedio = $nivelMedio+1;
            }else if($training->nivel == "Avanzado"){
                $nivelAvanzado = $nivelAvanzado+1;
            }else{
                $nivelBasico = $nivelBasico+1;
            }
        }

        
        return view('vistaEstadisticas',["totalEntrenadores"=>$cont,'minutosTotal'=>$minutosTotal,'basico'=>$nivelBasico,'medio'=>$nivelMedio,'avanzado'=>$nivelAvanzado]);
    }
}
