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
        
        $r1 = new Room();
        $r1->nombre = "Trastero";
        $r1->metrosCuadrados = 40;
        $r1->planta = 0;
        $r1->capacidad = 200;
        $r1->aireAcondicionado = true;
        $r1->ventana = 0;
        $r1->especialidad = "Almacenaje";
        $r1->disponible = true;
        $r1->save();   

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

        //$r1 = Room::find(1);
        $r1->machines()->saveMany([$m0, $m1, $m2, $m3]);  
    }
}
