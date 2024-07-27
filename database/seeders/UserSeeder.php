<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(["name" => "tiago reis", "email" => "teste@teste.com", "password" => bcrypt("223311"), 'cpf' => '08929391923', 'empresa_id' => 1]);
    }
}
