<?php 
if (!isset($_SESSION)) {
    session_start();
}

$dir_desenfocada = "./resources/upload/inputImg";
$dir_enfocada = "./resources/upload/outputImg";
$extensions_array = array('JPG','PNG','jpg','png','jpeg');

$fotoSeleccionada = $_POST["optionViewImage"];

$cadena_desenfocada   = 'inputImg';

$posicion_coincidencia = strpos($fotoSeleccionada, $cadena_desenfocada);

if($posicion_coincidencia==false){
    //buscar en la ruta de output
    $fotoSeleccionada=trim($fotoSeleccionada, "./resources/upload/outputImg/"); //recortamos la ruta para quedarnos con solo el nombre  
    imprimirImagen($dir_enfocada, $extensions_array,$fotoSeleccionada);
}else{
    //buscar en la ruta de input
    $fotoSeleccionada=trim($fotoSeleccionada, "./resources/upload/inputImg/");  
    imprimirImagen($dir_desenfocada, $extensions_array,$fotoSeleccionada);   
}


function imprimirImagen($dir, $extensions_array,$fotoSeleccionada){     
    if(is_dir($dir)){
        $files = scandir($dir);
        
        for($i = 0; $i < count($files); $i++){
            if($files[$i]==$fotoSeleccionada){
                // get file name
                echo "File Name -> $files[$i]<br>";
                
                // get file extension
                $file = pathinfo($files[$i]);
                $extension = $file['extension'];
                echo "File Extension-> $extension<br>";
                
            // check file extension
                if(in_array($extension, $extensions_array)){
                // show image
                echo "<img src='$dir/$files[$i]'><br>";
                }
            }
        }
    }
}







?>