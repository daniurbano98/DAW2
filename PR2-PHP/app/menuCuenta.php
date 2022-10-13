<?php

namespace app;

require_once('../entity/Cuenta.php');
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
        Consultar saldo <input type="number" placeholder="introduce el id" name="consultarSaldo">
        <input type="submit" name="consultarSaldoBoton"> <br> <br>
        Ingresar dinero <input type="number" placeholder="introduce el id" name="ingresarDinero">
        <input type="submit"> <br> <br>
        Sacar dinero <input type="number" placeholder="introduce el id" name="retirarDinero">
        <input type="submit"> <br> <br>
        Realizar transferencia <input type="number" placeholder="id de origen">
        <input type="number" placeholder="cantidad" name="cantidad">
        <input type="number" placeholder="id de destino" name="idDestino">
        <input type="submit" name="transferencia"> <br> <br>
    </form>

    <?php
    foreach ($_SESSION["clientes"] as $users) {
        echo $users;
    }



    if (isset($_POST["consultarSaldoBoton"])) {
        if (isset($_POST["consultarSaldo"])) {
            // consultarSaldo($_SESSION["clientes"],$_POST["consultarSaldo"]);
            foreach ($_SESSION["clientes"] as $user) {
                if ($user->getId_cuenta() == $_POST["consultarSaldo"]) {
                    echo $user->getSaldo();
                }
            }
        } else {
            echo "escribe coño";
        }
    }



    ?>

</body>

</html>