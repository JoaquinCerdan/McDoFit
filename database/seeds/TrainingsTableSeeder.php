<?php

use Illuminate\Database\Seeder;
use App\Training;
use App\Room;

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

        $t5 = new Trainer();
        $t5->nombreCompleto = "Arnol Alois Suaseneguer Junior";
        $t5->direccion = "C/ San Martín, 29";
        $t5->numCuenta = "ES41728394938942847298452";
        $t5->numTelefono = 641269503;
        $t5->especialidad = "Musculación";
        $t5->turno = "Mañana";
        $t5->save();

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

        $r2->trainings()->saveMany([$ting0]);
        $t5->trainings()->saveMany([$ting1]);
    }
}
