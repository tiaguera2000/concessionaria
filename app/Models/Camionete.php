<?php

namespace App\Models;

use App\Enums\CorVeiculo;
use App\Enums\OrigemVeiculo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Camionete extends Veiculo
{
    use HasFactory;

    protected $fillable = 
    ['ano', 'marca_id', 'nome', 'quilometragem', 'lugares', 'cor', 'descricao', 'origem', 'empresa_id', 'portas', 'tracao_integral', 'airbags', 
    'litragem_cacamba', 'reboque'];

    protected int $portas;
    protected bool $tracao_integral;
    protected bool $airbags;
    protected int $litragem_cacamba;
    protected bool $reboque;
    
    public function __construct()
    {
        parent::__construct();
    }
}
