<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\Trainer;
use App\Machine;
use App\Room;
use App\Training;

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

        $c1 = new Client();
        $c1->nombreCompleto = "Jacobo García García";
        $c1->tiempoEmpleado = 120;
        $c1->taquillaActual = -1;
        $c1->direccion = "C/ San Fernando, 27";
        $c1->numCuenta = "ES8372839494492849239292";
        $c1->numTelefono = 605025431;
        $c1->fechaAlta = date_create('2021-03-03');

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

        $c4 = new Client();
        $c4->nombreCompleto = "Agustín Tapia";
        $c4->tiempoEmpleado = 1023;
        $c4->taquillaActual = 55;
        $c4->direccion = "C/ Pedro Ferrandiz, 56";
        $c4->numCuenta = "ES6499839258392847233084";
        $c4->numTelefono = 658974319;
        $c4->fechaAlta = date_create('2019-12-23');

        $c5 = new Client();
        $c5->nombreCompleto = "Pablo Lima";
        $c5->tiempoEmpleado = 567;
        $c5->taquillaActual = 12;
        $c5->direccion = "C/ Antonio Garcia, 14";
        $c5->numCuenta = "ES6498439258368947238751";
        $c5->numTelefono = 965185793;
        $c5->fechaAlta = date_create('2018-08-12');

        $c6 = new Client();
        $c6->nombreCompleto = "Franco Stupa";
        $c6->tiempoEmpleado = 698;
        $c6->taquillaActual = 34;
        $c6->direccion = "C/ de las Heras, 7";
        $c6->numCuenta = "ES8476839258392447238574";
        $c6->numTelefono = 658987231;
        $c6->fechaAlta = date_create('2021-02-12');

        $c7 = new Client();
        $c7->nombreCompleto = "Alejandro Ruiz";
        $c7->tiempoEmpleado = 9658;
        $c7->taquillaActual = 31;
        $c7->direccion = "C/ Seba Nerone, 17";
        $c7->numCuenta = "ES6499887258392847233596";
        $c7->numTelefono = 722974879;
        $c7->fechaAlta = date_create('2017-11-17');

        $t4 = new Trainer();
        $t4->nombreCompleto = "Pedro Picarocas Lopez";
        $t4->direccion = "C/ San Peter Burgos, 28";
        $t4->numCuenta = "ES4172838893243847128451";
        $t4->numTelefono = 611759323;
        $t4->especialidad = "Musculación";
        $t4->turno = "Tarde";
        $t4->save();

        $t5 = new Trainer();
        $t5->nombreCompleto = "Antonio Trancos Lago";
        $t5->direccion = "C/ Romeo, 67";
        $t5->numCuenta = "ES41728388939853847128473";
        $t5->numTelefono = 612745721;
        $t5->especialidad = "Spinning";
        $t5->turno = "Mañana";
        $t5->save();
        

        $t4->clients()->saveMany([$c0, $c1, $c5, $c6]);   
        
        $t5->clients()->saveMany([$c0, $c3, $c4, $c7]); 

        
        $r0 = new Room();
        $r0->nombre = "Aseo";
        $r0->metrosCuadrados = 6;
        $r0->planta = 1;
        $r0->capacidad = 200;
        $r0->aireAcondicionado = true;
        $r0->ventana = 1;
        $r0->especialidad = "Almacenaje";
        $r0->disponible = true;
        $r0->save();
        
        $m4 = new Machine();
        $m4->nombre = "Spinning 4";
        $m4->sala = "Sala Spinning";
        $m4->vecesUtilizada = 6040;
        $m4->disponible = true;
        //$m4->save();

        $m5 = new Machine();
        $m5->nombre = "Spinning 5";
        $m5->sala = "Sala Spinning";
        $m5->vecesUtilizada = 6047;
        $m5->disponible = true;
        //$m5->save();

        $r0->machines()->saveMany([$m4, $m5]);

        $ting3 = new Training();
        $ting3->horario = date_create('2000-01-01 19:00:00');
        $ting3->nombre = "Spinning 400";
        $ting3->capacidad = 50;
        $ting3->duracion = 90;
        $ting3->nivel = "Medio";

        $ting3->room()->associate($r0);
        $ting3->trainer()->associate($t4);


        $ting3->save();

        $r0->trainings()->saveMany([$ting3]);

        $c1->machines()->attach($m4);
        $c2->machines()->attach($m5);

        $c1->trainings()->attach($ting3);

     

                 
        
    }
}
