<?php

namespace App\Interfaces;

use App\Enums\CorVeiculo;
use App\Enums\OrigemVeiculo;
use Illuminate\Database\Eloquent\Model;

interface IVeiculoFactory{

    public function build(array $parameters):Model;
    public function store():void;
    public function reset():void;
    public function setNome(string $nome):void;
    public function setAno(int $ano):void;
    public function setEmpresaId(int $empresa_id):void;
    public function setMarcaId(int $marcaId):void;
    public function setQuilometragem(int $quilometragem):void;
    public function setLugares(int $lugares):void;
    public function setCor(string $cor):void;
    public function setDescricao(string $descricao):void;
    public function setOrigem(string $origem):void;

}