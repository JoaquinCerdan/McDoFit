<?php

use Illuminate\Database\Seeder;
use App\Staticmaterial;
use App\Room;

class StaticmaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r0 = new Room();
        $r0->nombre = "Sala Genérica 1";
        $r0->metrosCuadrados = 80;
        $r0->planta = 0;
        $r0->capacidad = 50;
        $r0->aireAcondicionado = true;
        $r0->ventana = 0;
        $r0->especialidad = "Ninguna en concreto";
        $r0->disponible = false;
        $r0->save(); 

        $sm1 = new Staticmaterial();
        $sm1->nombre = "Fitball 1";

        $sm2 = new Staticmaterial();
        $sm2->nombre = "Fitball 2";

        $sm3 = new Staticmaterial();
        $sm3->nombre = "Fitball 3";

        $r0->staticmaterials()->saveMany([$sm1, $sm2, $sm3]);      
    }
}
