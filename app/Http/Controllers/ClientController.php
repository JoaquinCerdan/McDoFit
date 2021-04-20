<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{

    public function listClients(Request $request) {

        $c = Client::paginate(10);
        return view("clientes.listaClientes",["clients"=>$c]);
    
    }

    public function formularioModificarClients($id){
        $c = Client::findOrFail($id);
        return view("clientes.modificarClientes", ['client'=> $c]);
    }

    public function modificarClients(Request $request, $id) {
        $c = Client::findOrFail($id);
        if($request->has('nombreCompleto')){
            $c->nombreCompleto = $request->input('nombreCompleto');
            $c->taquillaActual = $request->input('taquillaActual');
            $c->direccion = $request->input('direccion');
            $c->numCuenta = $request->input('numCuenta');
            $c->numTelefono = $request->input('numTelefono');
            $c->fechaAlta = $request->input('fechaAlta');
            $c->save();
        }
        return redirect('/clientes');
    }

    public function borrarClients($id){
        
    }
    
}