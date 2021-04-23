<?php

use Illuminate\Database\Seeder;
use App\Trainer;

class TrainersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t0 = new Trainer();
        $t0->nombreCompleto = "Arnol Alois Suaseneguer ";
        $t0->direccion = "C/ San Martín, 28";
        $t0->numCuenta = "ES4172839493292847298451";
        $t0->numTelefono = 611229503;
        $t0->especialidad = "Musculación";
        $t0->turno = "Mañana";
        $t0->save();

        $t1 = new Trainer();
        $t1->nombreCompleto = "Lucía Escaleno López";
        $t1->direccion = "C/ San Martín, 28";
        $t1->numCuenta = "ES8372839498392847233231";
        $t1->numTelefono = 611429601;
        $t1->especialidad = "Yoga";
        $t1->turno = "Mañana";
        $t1->save();

        $t2 = new Trainer();
        $t2->nombreCompleto = "María Isósceles García";
        $t2->direccion = "C/ Libertad, 32";
        $t2->numCuenta = "ES8372839498392847230831";
        $t2->numTelefono = 613549651;
        $t2->especialidad = "Pilates";
        $t2->turno = "Tarde";
        $t2->save();

        $t3 = new Trainer();
        $t3->nombreCompleto = "Pablo Equilátro Infante";
        $t3->direccion = "C/ Buenavista, 8";
        $t3->numCuenta = "ES4322839400002111392314";
        $t3->numTelefono = 618325476;
        $t3->especialidad = "Spinning";
        $t3->turno = "Tarde";
        $t3->save();

        $t4 = new Trainer();
        $t4->nombreCompleto = "Carlos Pozzoni";
        $t4->direccion = "C/ Rodrigo Cartagena, 12";
        $t4->numCuenta = "ES4322839400002111392875";
        $t4->numTelefono = 625487589;
        $t4->especialidad = "Calistenoa";
        $t4->turno = "Tarde";
        $t4->save();

        $t5 = new Trainer();
        $t5->nombreCompleto = "Alejandra Salazar";
        $t5->direccion = "C/ Caminante, 34";
        $t5->numCuenta = "ES4322839400002111392712";
        $t5->numTelefono = 657325365;
        $t5->especialidad = "Calistenia";
        $t5->turno = "Mañana";
        $t5->save();

        $t6 = new Trainer();
        $t6->nombreCompleto = "Gemma Triay";
        $t6->direccion = "C/ Trafalgar, 25";
        $t6->numCuenta = "ES5822839400002111392787";
        $t6->numTelefono = 667325963;
        $t6->especialidad = "HIIT";
        $t6->turno = "Mañana";
        $t6->save();
    }
}
