<?php

use Database\Seeders\EstadoPruebaSeed;
use Database\Seeders\MedicionesCepaTincionSeed;
use Database\Seeders\MedicionesPruebaSeed;
use Database\Seeders\MedicionesSeed;
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
        // $this->call(UsersTableSeeder::class);
        $this->call(MedicionesSeed::class);
        $this->call(MedicionesPruebaSeed::class);
        $this->call(MedicionesCepaTincionSeed::class);
        $this->call(EstadoPruebaSeed::class);
    }
}
