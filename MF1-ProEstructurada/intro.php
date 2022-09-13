<?php 
    $texto = "hola";
    $entero = 2;
    $decimal = 2.2;
    $boolean = true;

    if(!$entero = 2){
        echo("lol xD");
    }else{
        echo("lul xd");
    }

    $array = ["hola","perro"];
    var_dump($array);

    echo("<br>");

    foreach ($array as $key => $value) {
       echo($value);
    }

  
    function hacer_café($tipo)
    {
    return "Hacer una taza de $tipo.\n";
    }
    echo hacer_café("capuccino");
    echo hacer_café(null);
    echo hacer_café("espresso");
?>