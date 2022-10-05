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
    <title>STUBanco</title>
</head>

<body>
    <form action="index.php" method="POST">
        <h1>Bienvenido a StuBanco</h1>
        Saldo <input type="number" name="saldo"></input>
        <br>
        Nombre<input type="text" name="nombre"></text>
        <input type="submit" name="register" value="Registar usuario"></input>
        <input type="submit" name="menuPrincipal" value="Menú principal"></input>


        <?php

        if (isset($_SESSION["clientes"])) {
            foreach ($_SESSION["clientes"] as $clientes) {
                echo $clientes;
            }
        }


        if (isset($_POST['saldo']) && isset($_POST['nombre'])) {
            if (empty($_POST['saldo']) || empty($_POST['nombre'])) {
                echo "no dejes campos vacios";
            } else if (preg_match('~[0-9]+~', $_POST['nombre'])) {
                echo 'Por favor no introduzcas numeros en tu nombre';
            } else {
                $new_account = new Cuenta($_POST['saldo'], $_POST['nombre'], "$");
                $_SESSION["clientes"][] = $new_account;
                echo $new_account;
            }
        }

        if (isset($_POST['menuPrincipal'])) {
            if (sizeof($_SESSION["clientes"]) > 2) {
                header('Location: menuCuenta.php');
            } else {
                echo "crea dos cuentas al menos";
            }
        }








        ?>
    </form>


</body>

</html>