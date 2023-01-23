<?php 
if (!isset($_SESSION)) {
    session_start();
}

$dir_desenfocada = "./resources/upload/inputImg";
$dir_enfocada = "./resources/upload/outputImg";
$extensions_array = array('JPG','PNG','jpg','png','jpeg');

$fotoSeleccionada = $_POST["optionViewImage"];

$cadena_desenfocada   = 'inputImg';

$posicion_coincidencia = strpos($fotoSeleccionada, $cadena_desenfocada); //buscamos si coinciden para buscar en una carpeta u otra

if($posicion_coincidencia==false){
    //buscar en la ruta de output
    $fotoSeleccionada=str_replace("./resources/upload/outputImg/","",$fotoSeleccionada); //recortamos la ruta para quedarnos con solo el nombre  
    imprimirImagen($dir_enfocada, $extensions_array,$fotoSeleccionada);
}else{
    //buscar en la ruta de input
    $fotoSeleccionada=str_replace("./resources/upload/outputImg/","",$fotoSeleccionada);
    imprimirImagen($dir_desenfocada, $extensions_array,$fotoSeleccionada);   
}


function imprimirImagen($dir, $extensions_array,$fotoSeleccionada){     
    if(is_dir($dir)){
        $files = scandir($dir);
        
        for($i = 0; $i < count($files); $i++){
            if($files[$i]==$fotoSeleccionada){
                echo "Nombre de la imagen-> $files[$i]<br>";
                //Conseguimos la extension
                $file = pathinfo($files[$i]);
                $extension = $file['extension'];
                echo "Extension-> $extension<br>";
                // comprobamos que sea una extension permitida
                if(in_array($extension, $extensions_array)){
                echo "<img src='$dir/$files[$i]'><br>";
                }
            }
        }
    }
}







?>