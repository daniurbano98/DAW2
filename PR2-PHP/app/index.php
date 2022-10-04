<?php 
namespace app;
require_once('../entity/Cuenta.php');



 $cuenta1 = new Cuenta(1000,"dani","$");
 $cuenta2 = new Cuenta(200,"afnan","$");

 
 echo $cuenta1->__toString();
 echo $cuenta2->__toString();
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUBanco</title>
</head>
<body>
    <h1>Bienvenido a StuBanco</h1>

    
</body>
</html>



