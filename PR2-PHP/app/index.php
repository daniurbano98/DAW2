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

        if (isset($_SESSION["clientes"])) { // con esto printo por pantalla los registros de usuarios
            foreach ($_SESSION["clientes"] as $clientes) {
                echo $clientes;
            }
        }


        if (isset($_POST['saldo']) && isset($_POST['nombre'])) {
            if (empty($_POST['saldo']) || empty($_POST['nombre'])) { //compruebo que no deje campos vacios
                echo "no dejes campos vacios";
            } else if (preg_match('~[0-9]+~', $_POST['nombre'])) { //compruebo que no introduzca numeros en el nombre
                echo 'Por favor no introduzcas numeros en tu nombre';
            } else {
                $new_account = new Cuenta($_POST['saldo'], $_POST['nombre'], "$"); //creo un objeto cuenta
                $_SESSION["clientes"][] = $new_account; //lo añado al array de sesion
                $new_account->setId_cuenta(sizeof($_SESSION["clientes"])); //con esto le añado un id que cada vez que cree una nueva cuenta se incrementa
                echo $new_account;
                echo $new_account->getId_cuenta();

                if (sizeof($_SESSION["clientes"]) > 1) { //cuando hay 2 cuentas creadas nos redirige al menú
                    header('Location: menuCuenta.php');
                }
            }
        }

        








        ?>
    </form>


</body>

</html>