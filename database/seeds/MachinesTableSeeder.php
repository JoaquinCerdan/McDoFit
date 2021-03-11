<?php

use Illuminate\Database\Seeder;
use App\Machine;

class MachinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m0 = new Machine();
        $m0->nombre = "Press Banca";
        $m0->sala = "Sala 2";
        $m0->vecesUtilizada = 6043;
        $m0->disponible = true;
        $m0->save();

        $m1 = new Machine();
        $m1->nombre = "Prensa de piernas";
        $m1->sala = "Sala 2";
        $m1->vecesUtilizada = 3164;
        $m1->disponible = true;
        $m1->save();

        $m2 = new Machine();
        $m2->nombre = "Spinning 1";
        $m2->sala = "Sala de Spinning";
        $m2->vecesUtilizada = 2212;
        $m2->disponible = true;
        $m2->save();

        $m2 = new Machine();
        $m2->nombre = "Spinning 2";
        $m2->sala = "Sala de Spinning";
        $m2->vecesUtilizada = 2210;
        $m2->disponible = true;
        $m2->save();
    }
}
