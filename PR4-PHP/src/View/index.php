<?php
require_once("../Controller/TallerController.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres Kerri Kopo Jon</title>
</head>
<body>
<h1>TALLERES KERRI KOPO JON</h1>
<form action="index.php" method="POST">
    <label>cif taller</label><input type="text" name="cif_taller"> <br>
    <label>direccion</label><input type="text" name="direccion">    <br>
    <label>telefono</label><input type="text" name="telefono">    <br>
    <label>facturacion</label><input type="text" name="facturacion"><br>
    <label>fecha de facturacion</label><input type="text" name="fecha_facturacion">  <br> 
    <input type="submit" value="Enviar">

</form>


<?php
    
    $cif_taller = $_POST["cif_taller"];
    $direccion= $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $facturacion = $_POST["facturacion"];
    $fecha_facturacion= $_POST["fecha_facturacion"];

    $tallerController = new TallerController;
    $tallerController->createTaller($cif_taller,$direccion,$telefono,$facturacion,$fecha_facturacion); 
        
?>
</body>
</html>