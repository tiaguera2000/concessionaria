<?php

namespace App\Factories;

use App\Interfaces\ICamioneteFactory;
use App\Models\Camionete;
use Illuminate\Database\Eloquent\Model;

class CamioneteFactory extends VeiculoFactory implements ICamioneteFactory{


    public function __construct()
    {
        $this->reset();
    }
    public function build(array $parameters):Model{

        $this->setAno($parameters['ano']);
        $this->setMarcaId($parameters['marca_id']);
        $this->setQuilometragem($parameters['quilometragem']);
        $this->setLugares($parameters['lugares']);
        $this->setCor($parameters['cor']);
        $this->setDescricao($parameters['descricao']);
        $this->setOrigem($parameters['origem']);
        $this->setPortas($parameters['portas']);
        $this->setTracaoIntegral($parameters['tracao_integral']);
        $this->setLitragemCacamba($parameters['litragem_cacamba']);
        $this->setAirbags($parameters['airbags']);
        $this->setReboque($parameters['reboque']);
        $this->setNome($parameters['nome']);
        $this->setEmpresaId($parameters['empresa_id']);
        return $this->veiculo;
    }

    public function store():void{

        $this->veiculo->save();
        $this->veiculo->reset();
    }

    public function reset():void{
        $this->veiculo = new Camionete();
    }

    
    public function setPortas(int $portas):void{
        $this->veiculo->portas = $portas;
    }
    public function setTracaoIntegral(bool $tracao_integral):void{
        $this->veiculo->tracao_integral = $tracao_integral;
    }
    public function setAirbags(bool $airbags):void{
        $this->veiculo->airbags = $airbags;
    }
    public function setLitragemCacamba(int $litragem_cacamba):void{
        $this->veiculo->litragem_cacamba = $litragem_cacamba;
    }
    public function setReboque(bool $reboque):void{
        $this->veiculo->reboque = $reboque;
    }
}