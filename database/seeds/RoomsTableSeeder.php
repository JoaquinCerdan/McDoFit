<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r0 = new Room();
        $r0->nombre = "Sala Calistenia";
        $r0->metrosCuadrados = 80;
        $r0->planta = 0;
        $r0->capacidad = 50;
        $r0->aireAcondicionado = true;
        $r0->ventana = 0;
        $r0->especialidad = "Calistenia";
        $r0->disponible = true;
        $r0->save(); 

        $r1 = new Room();
        $r1->nombre = "Sala Cardio";
        $r1->metrosCuadrados = 80;
        $r1->planta = 0;
        $r1->capacidad = 70;
        $r1->aireAcondicionado = true;
        $r1->ventana = 0;
        $r1->especialidad = "Cardio";
        $r1->disponible = true;
        $r1->save(); 

        $r2 = new Room();
        $r2->nombre = "Sala Yoga";
        $r2->metrosCuadrados = 80;
        $r2->planta = 0;
        $r2->capacidad = 80;
        $r2->aireAcondicionado = true;
        $r2->ventana = 0;
        $r2->especialidad = "Yoga";
        $r2->disponible = true;
        $r2->save(); 

        $r3 = new Room();
        $r3->nombre = "Sala Pierna";
        $r3->metrosCuadrados = 80;
        $r3->planta = 0;
        $r3->capacidad = 50;
        $r3->aireAcondicionado = true;
        $r3->ventana = 0;
        $r3->especialidad = "Musculación";
        $r3->disponible = true;
        $r3->save(); 

        $r4 = new Room();
        $r4->nombre = "Sala Boxeo";
        $r4->metrosCuadrados = 80;
        $r4->planta = 0;
        $r4->capacidad = 30;
        $r4->aireAcondicionado = true;
        $r4->ventana = 0;
        $r4->especialidad = "Boxeo";
        $r4->disponible = true;
        $r4->save(); 
    }
}
