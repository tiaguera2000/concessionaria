<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::create([
            'cnpj' => '00000000000000',
            'razao_social' => 'empresa administrador',
            'nome_fantasia' => 'empresa administrador'
        ]);
    }
}
