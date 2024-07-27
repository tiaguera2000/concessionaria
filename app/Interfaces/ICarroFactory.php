<?php

namespace App\Interfaces;

interface ICarroFactory{

    public function setPortas(int $portas):void;
    public function setTracaoIntegral(bool $tracaoIntegral):void;
    public function setAirbags(bool $airbags):void;
    public function setLitragemPortamalas(int $litragemPortaMalas):void;
}