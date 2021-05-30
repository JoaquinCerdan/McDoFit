<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\Rentalmaterial;

class RentalmaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c8 = new Client();
        $c8->nombreCompleto = "Daniel Joaquín Cerdán";
        $c8->tiempoEmpleado = 2658;
        $c8->taquillaActual = 21;
        $c8->direccion = "C/ Pedro Fernández, 11";
        $c8->numCuenta = "ES6499887253392847295596";
        $c8->numTelefono = 605974879;
        $c8->fechaAlta = date_create('2020-11-17');
        $c8->save();

        $c9 = new Client();
        $c9->nombreCompleto = "Mario Bros Bros";
        $c9->tiempoEmpleado = 10658;
        $c9->taquillaActual = 5;
        $c9->direccion = "C/ Toadstool, 17";
        $c9->numCuenta = "ES6499887258392847233596";
        $c9->numTelefono = 605974879;
        $c9->fechaAlta = date_create('2016-11-17');
        $c9->save();

        $rm1 = new Rentalmaterial();
        $rm1->disponible = true;
        $rm1->nombre = "Comba nº1";
        $rm1->save();

        $rm2 = new Rentalmaterial();
        $rm2->disponible = true;
        $rm2->nombre = "Comba nº2";
        $rm2->save();

        $rm3 = new Rentalmaterial();
        $rm3->disponible = true;
        $rm3->nombre = "Comba nº3";
        $rm3->save();

        $rm4 = new Rentalmaterial();
        $rm4->disponible = true;
        $rm4->nombre = "Comba nº4";
        $rm4->save();

        $rm5 = new Rentalmaterial();
        $rm5->disponible = true;
        $rm5->nombre = "mancuerna nº1";
        $rm5->save();

        $rm6 = new Rentalmaterial();
        $rm6->disponible = true;
        $rm6->nombre = "mancuerna nº2";
        $rm6->save();

        $rm7 = new Rentalmaterial();
        $rm7->disponible = true;
        $rm7->nombre = "mancuerna nº3";
        $rm7->save();

        $rm8 = new Rentalmaterial();
        $rm8->disponible = true;
        $rm8->nombre = "mancuerna nº4";
        $rm8->save();

        $c8->rentalmaterials()->saveMany([$rm1, $rm2, $rm3]); 
    }
}
