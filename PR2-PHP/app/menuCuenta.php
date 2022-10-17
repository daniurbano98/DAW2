<?php

namespace app;

use functions;

require_once('../entity/Cuenta.php');
require_once("functions.php");

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Menú principal</h1>
    <form action="menuCuenta.php" method="POST">
        Consultar saldo <input type="number" placeholder="introduce el id" name="idUserSaldo">
        <input type="submit" name="consultarSaldoBoton"> <br> <br>

        Ingresar dinero <input type="number" placeholder="introduce el id" name="idIngreso">
        <input type="number" placeholder="cantidad a ingresar" name="cantidadIngreso">
        <input type="submit" name="ingresarDineroBoton"> <br> <br>

        Sacar dinero <input type="number" placeholder="introduce el id" name="idRetirada">
        <input type="number" placeholder="cantidad a retirar" name="cantidadRetiro">
        <input type="submit" name="retirarDineroBoton"> <br> <br>

        Realizar transferencia <input type="number" placeholder="id de origen" name="idOrigen">
        <input type="number" placeholder="cantidad" name="cantidad">
        <input type="number" placeholder="id de destino" name="idDestino">
        <input type="submit" name="transferenciaBoton"> <br> <br>
    </form>

    <?php
    foreach ($_SESSION["clientes"] as $users) { //imprimo el toString cada vez que se recarga la pagina para ir viendo los cambios que se producen
        echo $users;
    }

    //compruebo que accion desea hacer el usuario y ejecuto el método correspondiente para cada caso

    if (isset($_POST["consultarSaldoBoton"])) {
        if (isset($_POST["idUserSaldo"])) {
            functions::consultarSaldo($_SESSION["clientes"],$_POST["idUserSaldo"]);
        } 
    }

    if(isset($_POST["ingresarDineroBoton"])){
        if (isset($_POST["cantidadIngreso"]) && isset($_POST["idIngreso"])){
            functions::comprobacionRetiradaIngreso($_POST["idIngreso"], $_POST["cantidadIngreso"], $_SESSION["clientes"]);
        }
    }

    if(isset($_POST["retirarDineroBoton"])){
        if (isset($_POST["cantidadRetiro"]) && isset($_POST["idRetirada"])){
            functions::comprobacionRetiradaIngreso($_POST["idRetirada"], $_POST["cantidadRetiro"], $_SESSION["clientes"]);
        }
    }

    if(isset($_POST["transferenciaBoton"])){
        if(isset($_POST["idOrigen"]) && isset($_POST["cantidad"]) && isset($_POST["idDestino"])){
            functions::transferencia($_POST["idOrigen"],$_POST["idDestino"],$_POST["cantidad"],$_SESSION["clientes"]);
        }
    }

    
    
    
    
    





    ?>

</body>

</html>