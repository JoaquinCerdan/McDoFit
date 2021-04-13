<?php

use Illuminate\Database\Seeder;
use App\Training;
use App\Room;
use App\Trainer;
use App\Machine;
use App\Client;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r2 = new Room();
        $r2->nombre = "Sala Spinning";
        $r2->metrosCuadrados = 80;
        $r2->planta = 0;
        $r2->capacidad = 100;
        $r2->aireAcondicionado = true;
        $r2->ventana = 0;
        $r2->especialidad = "Spinning";
        $r2->disponible = true;
        $r2->save(); 

        $m4 = new Machine();
        $m4->nombre = "Spinning 4";
        $m4->sala = "Sala Spinning";
        $m4->vecesUtilizada = 6040;
        $m4->disponible = true;

        $m5 = new Machine();
        $m5->nombre = "Spinning 5";
        $m5->sala = "Sala Spinning";
        $m5->vecesUtilizada = 6047;
        $m5->disponible = true;

        $r2->machines()->saveMany([$m4, $m5]);

        $t5 = new Trainer();
        $t5->nombreCompleto = "Arnol Alois Suaseneguer Junior";
        $t5->direccion = "C/ San Martín, 29";
        $t5->numCuenta = "ES41728394938942847298452";
        $t5->numTelefono = 641269503;
        $t5->especialidad = "Musculación";
        $t5->turno = "Mañana";
        $t5->save();

        $t6 = new Trainer();
        $t6->nombreCompleto = "Arnol Alois Suaseneguer Junior Junior";
        $t6->direccion = "C/ San Martín, 29";
        $t6->numCuenta = "ES41728394938942457298452";
        $t6->numTelefono = 641269502;
        $t6->especialidad = "Musculación";
        $t6->turno = "Tarde";
        $t6->save();

        $c0 = new Client();
        $c0->nombreCompleto = "Ana María Pérez Infante";
        $c0->tiempoEmpleado = 3020;
        $c0->taquillaActual = 2;
        $c0->direccion = "C/ San Martín, 27";
        $c0->numCuenta = "ES8372839498392847239231";
        $c0->numTelefono = 605829103;
        $c0->fechaAlta = date_create('2020-07-01');

        $c1 = new Client();
        $c1->nombreCompleto = "Jacobo García García";
        $c1->tiempoEmpleado = 120;
        $c1->taquillaActual = -1;
        $c1->direccion = "C/ San Fernando, 27";
        $c1->numCuenta = "ES8372839494492849239292";
        $c1->numTelefono = 605025431;
        $c1->fechaAlta = date_create('2021-03-03');

        $t5->clients()->saveMany([$c0]); 
        $t6->clients()->saveMany([$c1]); 

        $ting0 = new Training();
        $ting0->horario = date_create('2000-01-01 23:02:00');
        $ting0->nombre = "Spinning 1";
        $ting0->capacidad = 50;
        $ting0->duracion = 90;
        $ting0->nivel = "Avanzado";

        $ting1 = new Training();
        $ting1->horario = date_create('2000-01-01 17:00:00');
        $ting1->nombre = "Spinning 2";
        $ting1->capacidad = 20;
        $ting1->duracion = 30;
        $ting1->nivel = "Básico";

        $ting0->room()->associate($r2);
        $ting0->trainer()->associate($t5);
        
        //$ting1->room()->associate($r2);
        //$ting1->trainer()->associate($t6);

        $ting0->save();
        //$ting1->save();
        
        $r2->trainings()->saveMany([$ting0]);
        
        
    }
}
