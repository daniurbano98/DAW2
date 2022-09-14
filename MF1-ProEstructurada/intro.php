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
    echo hacer_café("latte");
    echo hacer_café("espresso");

    $estudiantesDaw2 = array("Afnan","Dani","Carlos");

    print_r($estudiantesDaw2);

    foreach ($estudiantesDaw2 as $key => $value) {
        echo($value);    
    }

    echo("<br>");

    $animales = ["mamifero"=>["perro","gato","la mama de la mama"],

                "reptiles" => ["lagarto","serpiente"]];

    foreach ($animales as $animal) {
       if(is_array($animal)){
        print_r($animal);
       }
    }
    
    echo("numero de elementos de un array ".count($animales));

    foreach ($animales as $key => $value) {
        print_r($key);
        print_r(implode(", ",$value));
        }
    
        $pizza  = "porción1 porción2 porción3 porción4 porción5 porción6";
        $porciones = explode(" ", $pizza);
        echo $porciones[0];
        echo $porciones[1];
        echo $porciones[5];
        
        
        function desayuno($bebida, $comida): string{
            return "Tomo $bebida con $comida";
        }
        echo(desayuno("huevos","pan"));
    
        $notas = array(9,7,8,6);

        function calcularMedia($notas,$total_alumnos){
            $suma_notas = 0;
            foreach ($notas as $idAlumno => $nota) {
                $suma_notas += $nota;
            }

            $media = $suma_notas / $total_alumnos;
            return $media;
        }

        echo("la media de la clase es: ".calcularMedia($notas,count($notas)));
?>