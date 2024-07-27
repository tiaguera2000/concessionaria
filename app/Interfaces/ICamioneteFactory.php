<?php

namespace App\Interfaces;

interface ICamioneteFactory{

    public function setPortas(int $portas):void;
    public function setTracaoIntegral(bool $tracaoIntegral):void;
    public function setAirbags(bool $airbags):void;
    public function setLitragemCacamba(int $litragemCacamba):void;
    public function setReboque(bool $reboque):void;
}