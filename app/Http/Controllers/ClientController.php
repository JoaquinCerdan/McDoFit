<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
Use \Carbon\Carbon;

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

        return redirect('clientes');
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
    
}