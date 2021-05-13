<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientsTableSeeder::class);
        $this->call(MachinesTableSeeder::class);
        $this->call(TrainersTableSeeder::class);
        $this->call(TrainingsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(RentalmaterialTableSeeder::class);
        $this->call(StaticmaterialTableSeeder::class);
    }
}
