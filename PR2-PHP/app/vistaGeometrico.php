<?php


use Circulo\Circulo;

require_once("../entity/Circulo.php");
require_once("../entity/Geometrico.php");


//comprobacion de que funciona
$radio = 5;
$circulo = new Circulo($radio);

 echo $circulo->area();

?>