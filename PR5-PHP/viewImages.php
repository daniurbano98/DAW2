<?php


if (!isset($_SESSION)) {
    session_start();
}

$dir_desenfocada = "./resources/upload/inputImg";
$dir_enfocada = "./resources/upload/outputImg";
$extensions_array = array('JPG','PNG','jpg','png','jpeg');

function imprimirImagenes($dir_path,  $extensions_array){     
    if(is_dir($dir_path)){
        $files = scandir($dir_path);
        
        for($i = 0; $i < count($files); $i++){
            if($files[$i] !='.' && $files[$i] !='..'){
                echo "Nombre de la imagen-> $files[$i]<br>";
                $file = pathinfo($files[$i]);
                $extension = $file['extension'];
                echo "Extensión-> $extension<br>";
                if(in_array($extension, $extensions_array)){
                    echo "<img src='$dir_path/$files[$i]'><br>";
                }
            }
        }
    }
}


if(isset($_POST["options"])){
    if( $_POST["options"]=="enfocadas"){
        imprimirImagenes($dir_enfocada,$extensions_array);

    }else if($_POST["options"]=="desenfocadas"){
        imprimirImagenes($dir_desenfocada,  $extensions_array);

    }else if($_POST["options"]=="todas"){
        imprimirImagenes($dir_desenfocada,  $extensions_array);
        imprimirImagenes($dir_enfocada,  $extensions_array);
    }
     
 }

   
   








    
    
   
    
?>