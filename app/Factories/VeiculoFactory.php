<?php

namespace App\Factories;

use App\Enums\CorVeiculo;
use App\Enums\OrigemVeiculo;
use App\Interfaces\IVeiculoFactory;
use Illuminate\Support\Facades\Auth;

abstract class VeiculoFactory implements IVeiculoFactory
{
    protected $veiculo;

    public function __construct()
    {
        
    }
    
    public function setNome(string $nome):void{
        $this->veiculo->nome = $nome;
    }
    public function setEmpresaId(int $empresa_id):void{
        $this->veiculo->empresa_id = Auth::user()->empresa_id;
    }
    public function setAno(int $ano):void{
        $this->veiculo->ano = $ano;
    }
    public function setMarcaId(int $marca_id):void{
        $this->veiculo->marca_id = $marca_id;
    }
    public function setQuilometragem(int $quilometragem):void{
        $this->veiculo->quilometragem = $quilometragem;
    }
    public function setLugares(int $lugares):void{
        $this->veiculo->lugares = $lugares;
    }
    public function setCor(string $cor):void{
        $this->veiculo->cor = $this->mapCor($cor);
    }
    public function setDescricao(string $descricao):void{
        $this->veiculo->descricao = $descricao;
    }
    public function setOrigem(string $origem):void{
        $this->veiculo->origem = $this->mapOrigem($origem);
    }

    public function mapCor($cor):CorVeiculo{
        $arrayCores = [
        'VERMELHO' => CorVeiculo::VERMELHO,
        'PRETO' => CorVeiculo::PRETO,
        'PRATA' => CorVeiculo::PRATA,
        'BRANCO' => CorVeiculo::BRANCO,
        'BEGE' => CorVeiculo::BEGE,
        'CINZA' => CorVeiculo::CINZA,
        'AMARELO' => CorVeiculo::AMARELO,
        'AZUL' => CorVeiculo::AZUL,
        'ROXO' => CorVeiculo::ROXO,
        'LARANJA' => CorVeiculo::LARANJA
        ];
        return $arrayCores[$cor];
    }
    public function mapOrigem($origem):OrigemVeiculo{

        $arrayOrigem = [
            'NACIONAL' => OrigemVeiculo::NACIONAL,
            'INTERNACIONAL' => OrigemVeiculo::INTERNACIONAL
        ];
        return $arrayOrigem[$origem];
    }
}