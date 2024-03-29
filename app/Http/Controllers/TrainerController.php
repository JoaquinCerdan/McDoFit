<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use App\Client;
use App\Training;

class TrainerController extends Controller
{
    //    
    public function listTrainers(Request $request) {
        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $m = Trainer::orderBy($sort )->paginate(7);
        }else{
            $sort = null;
            $m = Trainer::paginate(7);
        }
        return view("listaTrainers",["trainers"=>$m,'sort'=>$sort]);
    }


    public function addTrainer(Request $request) {
        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $m = Trainer::orderBy($sort )->paginate(7);
        }else{
            $sort = null;
            $m = Trainer::paginate(7);
        }
        return view("insertTrainer",["trainers"=>$m,'sort'=>$sort]);
    }

    public function insertTrainer(Request $request){

        $request->validate([
            'nombreCompleto'=>'required',
            'direccion' => 'required',
            'numTelefono'=>'required',
            'numCuenta'=>'required',
            'especialidad'=>'required',
            'turno'=>'required'
        ]);

        $trainer = new Trainer;
        $trainer->nombreCompleto = $request->input('nombreCompleto');
        $trainer->direccion = $request->input('direccion');
        $trainer->numCuenta = $request->input('numCuenta');
        $trainer->numTelefono = $request->input('numTelefono');
        $trainer->turno = $request->input('turno');
        $trainer->especialidad = $request->input('especialidad');


        if( $trainer->nombreCompleto != null && $trainer->direccion != null &&
            $trainer->numCuenta != null && $trainer->numTelefono != null &&
            $trainer->turno != null && $trainer->especialidad != null){

                $trainer->save();
                return view("popup",['name'=>$trainer,'accion'=>'insertado']);
            }
            else{
                return view("insertTrainer",["trainers"=>$trainer]);
            }

        
    }


    public function modifyTrainer(Request $request,$id){


        

            $trainer = Trainer::findOrFail($id);
            /*
            $request->validate([
                'nombreCompleto'=>'required',
                'direccion' => 'required',
                'numTelefono'=>'required',
                'numCuenta'=>'required',
                'especialidad'=>'required',
                'turno'=>'required'
            ]);*/


            
            if($request->has('nombreCompleto')){
                $trainer->nombreCompleto = $request->input('nombreCompleto');
                $trainer->direccion = $request->input('direccion');
                $trainer->numCuenta = $request->input('numCuenta');
                $trainer->numTelefono = $request->input('numTelefono');
                $trainer->turno = $request->input('turno');
                $trainer->especialidad = $request->input('especialidad');
                $trainer->save();
            }
            
                return view('modifyTrainer',['trainer'=>$trainer,'accion'=>'insertado']);
            
    }


    public function deleteTrainer($id){

        /*
        $trainer = Trainer::get()->first();

        $trainings = Training::where('trainer_id',$id)->get();

        foreach ($trainings as $training){

            $training = Training::find($training->id);
            $training->trainer_id = $trainer->id;
            $training->save();

        }*/
        //delete on cascade -> acceso a datos -> 21

        $t = Trainer::findOrFail($id);
        $t->delete();

        //para paginar por dos resultados solo
        //$m = Trainer::paginate(2);

        return redirect('trainersAdmin');
    }


    public function viewOneTrainer($id){

       

        $trainer = Trainer::findOrFail($id);
        

        return view("vistaTrainer",["trainer"=>$trainer]);

    }

}
