<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staticmaterial;
use App\Rentalmaterial;
use App\Client;
//Use \Carbon\Carbon;

class MaterialController extends Controller
{
    
    public function listRentalMaterial(Request $request) {
        $m = Rentalmaterial::paginate(7);
        return view("listaMateriales", ["materiales"=>$m]);
    }

    public function alquilarMaterial($client_id, $material) {
        $cliente = Client::findOrFail($client_id);
        $cliente->rentalmaterials()->saveMany([$material]);
        return redirect('/home');
    }

}
