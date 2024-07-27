<?php

namespace App\Models;

use App\Enums\CorVeiculo;
use App\Enums\OrigemVeiculo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Veiculo 
{

    protected $fillable = 
    ['ano', 'marca_id', 'nome', 'quilometragem', 'lugares', 'cor', 'descricao', 'origem', 'empresa_id', 'portas', 'tracao_integral', 'airbags', 'litragem_portamalas'];

    protected int $portas;
    protected bool $tracao_integral;
    protected bool $airbags;
    protected int $litragem_portamalas;

}
