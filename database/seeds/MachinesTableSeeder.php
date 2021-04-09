<?php

use Illuminate\Database\Seeder;
use App\Machine;
use App\Room;

class MachinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
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
        */
        

        $m0 = new Machine();
        $m0->nombre = "Press Banca";
        $m0->sala = "Sala 2";
        $m0->vecesUtilizada = 6043;
        $m0->disponible = true;
        //$m0->save();

        $m1 = new Machine();
        $m1->nombre = "Prensa de piernas";
        $m1->sala = "Sala 2";
        $m1->vecesUtilizada = 3164;
        $m1->disponible = true;
        //$m1->save();

        $m2 = new Machine();
        $m2->nombre = "Spinning 1";
        $m2->sala = "Sala de Spinning";
        $m2->vecesUtilizada = 2212;
        $m2->disponible = true;
        //$m2->save();

        $m3 = new Machine();
        $m3->nombre = "Spinning 2";
        $m3->sala = "Sala de Spinning";
        $m3->vecesUtilizada = 2210;
        $m3->disponible = true;
        //$m3->save();

        $r0->machines()->saveMany([$m0, $m1, $m2, $m3]);  
    }
}
