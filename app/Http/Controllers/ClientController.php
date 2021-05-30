<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Training;
Use \Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    public function listClients(Request $request) {

        if($request->has("sort")){
            $sort = $request->input("sort") ;
            $c = Client::orderBy($sort )->paginate(7);
        }else{
            $sort = null;
            $c = Client::paginate(7);
        }
        return view("clientes.listaClientes",["clients"=>$c,'sort'=>$sort]);
    }

    public function formularioModificarClients($id){
        $c = Client::findOrFail($id);
        return view("clientes.modificarClientes", ['client'=> $c]);
    }

    public function modificarClients(Request $request, $id) {
        $c = Client::findOrFail($id);
        $carbon = new Carbon();
        $c->nombreCompleto = $request->input('nombreCompleto');
        $c->tiempoEmpleado = $request->input('tiempoEmpleado');
        $c->taquillaActual = $request->input('taquillaActual');
        $c->direccion = $request->input('direccion');
        $c->numCuenta = $request->input('numCuenta');
        $c->numTelefono = $request->input('numTelefono');   
        $c->fechaAlta = $request->input('fechaAlta');
        $c->updated_at = $carbon->now();
        $c->save();

        return view('clientes.modificarClientes',["client"=>$c]);
    }

    public function borrarClients($id){
        $cliente = Client::findOrFail($id);
        $cliente->delete();
        return redirect('clientes');
    }

    public function addCliente(){
        return view("clientes.insertarClientes");
    }

    public function add(Request $request){
        $c = new Client;
        $carbon = new Carbon();

        $c->nombreCompleto = $request->input('nombreCompleto');
        $c->taquillaActual = $request->input('taquillaActual');
        $c->tiempoEmpleado = 0;
        $c->direccion = $request->input('direccion');
        $c->numCuenta = $request->input('numCuenta');
        $c->numTelefono = $request->input('numTelefono');
        $c->fechaAlta = $request->input('fechaAlta');
        $c->created_at = $carbon->now();
        $c->updated_at = $carbon->now();

        if($c->nombreCompleto != null && $c->taquillaActual != null && $c->direccion != null 
            && $c->numCuenta != null && $c->numTelefono != null && $c->fechaAlta != null){
                $c->save();
                return redirect('clientes');
            }else{
                return redirect('addCliente');
            }
    }

    public function register(){
        return view('vistaRegistrarUsuario');
    }


    //En esta funcion, es la que los usuarios se registran ellos solos.
    public function addUser(Request $request){
        $c = new Client;
        $carbon = new Carbon();
        $t = Client::max('taquillaActual');
        
        $t=$t+1;
        $date = Carbon::now();
        $date = $date->format('Y-m-d');

        $newDate = date("d-m-Y", strtotime($date));

        $c->nombreCompleto = $request->input('nombre');
        $c->taquillaActual = $t;
        $c->tiempoEmpleado = 0;
        $c->direccion = $request->input('direccion');
        $c->numCuenta = $request->input('numCuenta');
        $cuentaAux = $request->input('numCuenta');
        $c->numTelefono = $request->input('telefono');
        $c->fechaAlta = $date;
        $c->created_at = $carbon->now();
        $c->updated_at = $carbon->now();
    
        $c->save();

        $existencia = Client::find($c->id);

        if($cuentaAux == $existencia->numCuenta){
            $valido = 1;
            return view('vistaUsuarioRegistrado',["valido"=>$valido]);
        }else{
            $valido = 0;
            return view('vistaUsuarioRegistrado',["valido"=>$valido]);
        }
    }

    public function viewOneClient($id){

        $cliente = Client::findOrFail($id);

        return view("vistaCliente",["cliente"=>$cliente]);


    }

    public function apuntarseAUnaClase($idClase,$idClient){
        
        $carbon = new Carbon();
        $meter = true;

        $cliente = new Client();
        $cliente = Client::findOrFail($idClient);

        $training = new Training();
        $training = Training::findOrFail($idClase);

        



        //para consultar
        //$resultado = DB::table('client_training')->where('client_id',$idClient);
        
        
        $resultado = DB::table('client_training')->get();

        foreach($resultado as $r){
            if($r->training_id == $idClase && $r->client_id == $idClient){
                $meter = false;
            }

        }

        if($meter == true){
            //para insertar
            $training->clients()->savemany([$cliente]);
            return view("apuntadoAClaseCorrecto");
        }else{
            return view("apuntadoAClaseIncorrecto");
        }
    }

    
}