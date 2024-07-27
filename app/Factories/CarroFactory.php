<?php

namespace App\Factories;

use App\Enums\CorVeiculo;
use App\Enums\OrigemVeiculo;
use App\Interfaces\ICarroFactory;
use App\Interfaces\IVeiculoFactory;
use App\Models\Camionete;
use App\Models\Carro;
use Illuminate\Database\Eloquent\Model;

class CarroFactory extends VeiculoFactory implements ICarroFactory{


    public function __construct()
    {
        $this->reset();
    }
    public function build(array $parameters):Model{

        $this->setNome($parameters['nome']);
        $this->setAno($parameters['ano']);
        $this->setMarcaId($parameters['marca_id']);
        $this->setQuilometragem($parameters['quilometragem']);
        $this->setLugares($parameters['lugares']);
        $this->setCor($parameters['cor']);
        $this->setDescricao($parameters['descricao']);
        $this->setOrigem($parameters['origem']);
        $this->setPortas($parameters['portas']);
        $this->setTracaoIntegral($parameters['tracao_integral']);
        $this->setLitragemPortamalas($parameters['litragem_portamalas']);
        $this->setAirbags($parameters['airbags']);
        $this->setEmpresaId($parameters['empresa_id']);
        return $this->veiculo;
    }

    public function store():void{

        $this->veiculo->save();
        $this->veiculo->reset();
    }

    public function reset():void{
        $this->veiculo = new Carro();
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
    public function setLitragemPortamalas(int $litragem_portamalas):void{
        $this->veiculo->litragem_portamalas = $litragem_portamalas;
    }
}