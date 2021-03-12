<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Machine;
use App\Client;
use App\Trainer;

class RelationsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /*public function testExample()
    {
        //$response = $this->get('/');

        //$response->assertStatus(200);

    }*/


    /** @test */
    public function test_Machine_Client_Assert(){

        $machine = new Machine();
        $machine->nombre = "Cinta de correr";
        $machine->sala = "Sala 26";
        $machine->vecesUtilizada = 6969;
        $machine->disponible = true;
        $machine->save();

        $client = new Client();
        $client->nombreCompleto = "Ana María Lopez";
        $client->tiempoEmpleado = 300;
        $client->taquillaActual = 65;
        $client->direccion = "C/ San Martín, 27";
        $client->numCuenta = "ES8372839498392847239231";
        $client->numTelefono = 605829603;
        $client->fechaAlta = date_create('2021-01-01');
        $client->save();

        $client->machines()->attach($machine);

        $this->assertEquals($client->machines[0]->nombre,"Cinta de correr");
        $this->assertEquals($machine->clients[0]->nombreCompleto,"Ana María Lopez");

        $client->machines()->detach($machine);

        $client->delete();
        $machine->delete();

    }
    



    /** @test */
    public function test_Trainer_Client_Assert(){

        $trainer = new Trainer();
        $trainer->nombreCompleto = "ArnolMartinezSuaseneguer";
        $trainer->direccion = "C/ San Mateo, 28";
        $trainer->numCuenta = "ES4176999493292847298451";
        $trainer->numTelefono = 611228503;
        $trainer->especialidad = "Bicicleta";
        $trainer->turno = "Tarde";
        $trainer->save();

        $client1 = new Client();
        $client1->nombreCompleto = "Elisa Lopez Garatea";
        $client1->tiempoEmpleado = 5033;
        $client1->taquillaActual = -1;
        $client1->direccion = "C/ Lopez, 2";
        $client1->numCuenta = "ES9999839498366847233214";
        $client1->numTelefono = 611224193;
        $client1->fechaAlta = date_create('2021-02-02');

        $trainer->clients()->save($client1);
        //echo "Esto es var dump:";
        //print_r($client1);

        //$this->assertEquals($client1->trainers->nombreCompleto, "ArnolMartinezSuaseneguer");
        $this->assertEquals($trainer->clients[0]->nombreCompleto,"Elisa Lopez Garatea");

        //echo "Esto es trainer->nombrecompleto : ".$trainer->direccion;
        //echo "Esto es trainer->nombrecompleto : ".$trainer->nombreCompleto;
        
        //echo "Esto tambien es una preuba.";


        $client1->delete();
        $trainer->delete();
        

    }
}
