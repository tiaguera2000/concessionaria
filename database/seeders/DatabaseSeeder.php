<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*$this->call(EmpresaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MarcaSeeder::class);*/
        //$this->call(CarroSeeder::class);
        $this->call(CamioneteSeeder::class);
    }
}