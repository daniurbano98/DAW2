<?php
namespace Circulo;
use Geometrico\Geometrico;
require_once "Geometrico.php";

class Circulo extends Geometrico{
    private $radio;

    function __construct(float $radio){
        $this->radio=$radio;
    }

    function area(){  
        $calculo = pi() * (pow($this->radio,2));
        echo "el resultado del area es ".$calculo;

    }
}




?>