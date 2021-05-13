<?php

namespace App\Http\Controllers;


class MiCuentaController extends Controller
{
    public function menuCuenta() {
        return view("miCuenta");
    }

    public function menuAdmin(){
        return view('vistaAdmin');
    }


}
