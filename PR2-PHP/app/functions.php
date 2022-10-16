<?php
class functions
{


    public static function comprobacionRetiradaIngreso($id, $campo, $array)
    {
        if ($campo == $_POST["cantidadRetiro"]) {
            foreach ($array as $user) {
                if ($user->getId_cuenta() == $id) {
                    if ($campo > $user->getSaldo()) {
                        echo "no puedes retirar más dinero del que tienes";
                    } else {
                        $saldoActualizado = $user->getSaldo() - $campo;
                        echo $user->setSaldo($saldoActualizado);
                    }
                }
            }
        } else if ($campo == $_POST["cantidadIngreso"]) {
            foreach ($array as $user) {
                if ($user->getId_cuenta() == $id) {
                    $saldoActualizado = $user->getSaldo() + $campo;
                    echo $user->setSaldo($saldoActualizado);
                }
            }
        }
    }

    public static function transferencia($idEmisor, $idReceptor, $cantidad, $array)
    {

        foreach ($array as $user) {
            if ($user->getId_cuenta() == $idEmisor) {
                $userEmisor = $user;
            } else if ($user->getId_cuenta() == $idReceptor) {
                $userReceptor = $user;
            }
        }
        $saldoActualizadoEmisor =  $userEmisor->getSaldo() - $cantidad;
        echo $userEmisor->setSaldo($saldoActualizadoEmisor);

        $saldoActualizadoReceptor = $userReceptor->getSaldo() + $cantidad;
        echo $userReceptor->setSaldo($saldoActualizadoReceptor);

        echo "transferencia realizada con éxito";
        
    }


    public static function consultarSaldo($array, $comparacion)
    {
        foreach ($array as $user) {
            if ($user->getId_cuenta() == $comparacion) {
                echo $user->getSaldo();
            }
        }
    }
}
