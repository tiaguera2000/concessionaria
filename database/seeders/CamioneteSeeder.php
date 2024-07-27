<?php

namespace Database\Seeders;

use App\Enums\CorVeiculo;
use App\Enums\OrigemVeiculo;
use App\Factories\CamioneteFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CamioneteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = new CamioneteFactory();
        $camionete = $factory->build([
            'ano' => '2010', 
            'marca_id' => 1, 
            'nome' => 'amarok', 
            'quilometragem' => '200000', 
            'lugares' => 5, 
            'cor' => CorVeiculo::BRANCO, 
            'descricao' => 'amarok em perfeito estado', 
            'origem' => OrigemVeiculo::NACIONAL,
            'empresa_id' => 1, 
            'portas' => 2, 
            'tracao_integral' => true, 
            'airbags' => true, 
            'litragem_cacamba' => '800',
            'reboque' => true
        ]);
        $camionete->save();
    
    }
}
