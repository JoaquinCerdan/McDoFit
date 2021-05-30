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

    public function alquilarMaterial($idCliente, $idMaterial) {
        $cliente = new Client();
        $material = new Rentalmaterial();
        $material = Rentalmaterial::findOrFail($idMaterial);
        $cliente = Client::findOrFail($idCliente);
        $cliente->rentalmaterials()->savemany($material);
        return view("home");
    }

}
