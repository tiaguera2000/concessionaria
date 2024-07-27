<?php

namespace App\Models;

use App\Enums\CorVeiculo;
use App\Enums\OrigemVeiculo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

abstract class Veiculo extends Model
{
    use HasFactory;
    protected int $ano;
    protected int $marca_id;
    protected string $nome;
    protected int $quilometragem;
    protected int $lugares;
    protected CorVeiculo $cor;
    protected string $descricao;
    protected OrigemVeiculo $origem;
    protected int $empresa_id;

        public function __construct()
    {
        
        $this->empresa_id = Auth::user()->empresa_id;
    }


}
