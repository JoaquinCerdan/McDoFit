<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c0 = new Client();
        $c0->nombreCompleto = "Ana María Pérez Infante";
        $c0->tiempoEmpleado = 3020;
        $c0->taquillaActual = 2;
        $c0->direccion = "C/ San Martín, 27";
        $c0->numCuenta = "ES8372839498392847239231";
        $c0->numTelefono = 605829103;
        $c0->fechaAlta = date_create('2020-07-01');
        $c0->save();

        $c1 = new Client();
        $c1->nombreCompleto = "Jacobo García García";
        $c1->tiempoEmpleado = 120;
        $c1->taquillaActual = -1;
        $c1->direccion = "C/ San Fernando, 27";
        $c1->numCuenta = "ES8372839494492849239292";
        $c1->numTelefono = 605025431;
        $c1->fechaAlta = date_create('2021-03-03');
        $c1->save();

        $c2 = new Client();
        $c2->nombreCompleto = "Rubén Doblas Pérez";
        $c2->tiempoEmpleado = 3237;
        $c2->taquillaActual = -1;
        $c2->direccion = "C/ Ritas, 109";
        $c2->numCuenta = "ES8938239498392847231821";
        $c2->numTelefono = 634873403;
        $c2->fechaAlta = date_create('2020-11-30');
        $c2->save();

        $c3 = new Client();
        $c3->nombreCompleto = "Elisa Martínez Garatea";
        $c3->tiempoEmpleado = 5043;
        $c3->taquillaActual = -1;
        $c3->direccion = "C/ Celada, 2";
        $c3->numCuenta = "ES9999839498392847233214";
        $c3->numTelefono = 611223193;
        $c3->fechaAlta = date_create('2021-01-02');
        $c3->save();
        
    }
}
