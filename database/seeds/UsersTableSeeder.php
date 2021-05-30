<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Client;
use App\Trainer;
use App\Administrator;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c10 = new Client();
        $c10->nombreCompleto = "Ana María López Infante";
        $c10->tiempoEmpleado = 3020;
        $c10->taquillaActual = 2;
        $c10->direccion = "C/ San Martín, 27";
        $c10->numCuenta = "ES8372839428392847239231";
        $c10->numTelefono = 625829103;
        $c10->fechaAlta = date_create('2020-07-01');
        $c10->save();

        $t10 = new Trainer();
        $t10->nombreCompleto = "Alexia Carreño Pérez";
        $t10->direccion = "C/ San Santo, 28";
        $t10->numCuenta = "ES4172839493292847298451";
        $t10->numTelefono = 612229503;
        $t10->especialidad = "Boxeo";
        $t10->turno = "Tarde";
        $t10->save();

        $a0 = new Administrator();
        $a0->nombreCompleto = "Francisca Huertas Puertas";

        $u0 = new User();
        $u0->email = "client@gmail.com";
        $u0->password = Hash::make("client1234");
        $u0->role = "Client";

        $u1 = new User();
        $u1->email = "trainer@gmail.com";
        $u1->password = Hash::make("trainer1234");
        $u1->role = "Trainer";

        $u2 = new User();
        $u2->email = "admin@gmail.com";
        $u2->password = Hash::make("admin1234");
        $u2->role = "Administrator";

        $c10->user()->save($u0);
        $t10->user()->save($u1);
        $a0->user()->save($u2);

    }
}
