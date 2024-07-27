<?php

namespace Database\Seeders;

use App\Enums\CorVeiculo;
use App\Enums\OrigemVeiculo;
use App\Factories\CarroFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = new CarroFactory();
        $carro = $factory->build([
            'ano' => '1998', 
            'marca_id' => 1, 
            'nome' => 'santana', 
            'quilometragem' => '200000', 
            'lugares' => 5, 
            'cor' => CorVeiculo::BRANCO, 
            'descricao' => 'santana unico dono', 
            'origem' => OrigemVeiculo::NACIONAL,
            'empresa_id' => 1, 
            'portas' => 4, 
            'tracao_integral' => false, 
            'airbags' => false, 
            'litragem_portamalas' => '440'
        ]);
        $carro->save();
    }
}
