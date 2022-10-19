<?php
class functions
{


    public static function comprobacionRetiradaIngreso($id, $campo, $array)
    {   //compruebo si quiere hacer una retirada o un ingreso
        if ($campo == $_POST["cantidadRetiro"]) {
            foreach ($array as $user) {
                if ($user->getId_cuenta() == $id) { 
                    if ($campo > $user->getSaldo()) { //compruebo que la cantidad que quiera retirar no sea mayor a la que dispone
                        echo "no puedes retirar más dinero del que tienes";
                    } else {
                        $saldoActualizado = $user->getSaldo() - $campo; //en este caso le resto lo que quiere retirar a su saldo actual
                        echo $user->setSaldo($saldoActualizado);    
                    }
                }
            }
        } else if ($campo == $_POST["cantidadIngreso"]) {
            foreach ($array as $user) {
                if ($user->getId_cuenta() == $id) {
                    $saldoActualizado = $user->getSaldo() + $campo; //en este caso le sumo lo que quiere ingresar a su saldo actual
                    echo $user->setSaldo($saldoActualizado);
                }
            }
        }
    }

    public static function transferencia($idEmisor, $idReceptor, $cantidad, $array)
    {

        foreach ($array as $user) {
            if ($user->getId_cuenta() == $idEmisor) {
                $userEmisor = $user; //me guardo la referencia del idEmisor en una variable cuando lo encuentre en el array
            } else if ($user->getId_cuenta() == $idReceptor) {
                $userReceptor = $user; //me guardo la referencia del idReceptor en una variable cuando lo encuentre en el array
            }
        }

        if($userEmisor->getSaldo()<$cantidad){
            echo "no puedes retirar más dinero del que tienes";
        }else{
            $saldoActualizadoEmisor =  $userEmisor->getSaldo() - $cantidad; //al emisor le resto la cantidad que le traspasa al receptor
            echo $userEmisor->setSaldo($saldoActualizadoEmisor);

            $saldoActualizadoReceptor = $userReceptor->getSaldo() + $cantidad; //al receptor le sumo la cantidad que le traspasa el receptor
            echo $userReceptor->setSaldo($saldoActualizadoReceptor);

            echo "<br>"."transferencia realizada con éxito";

        }

        
        
    }


    public static function consultarSaldo($array, $comparacion)
    {
        foreach ($array as $user) {
            if ($user->getId_cuenta() == $comparacion) {    //compruebo en el array que exista y si es asi imprimo el saldo por pantalla
                echo "<br>"."El saldo del usuario ".$user->getNombre()." es ".$user->getSaldo();
            }
        }
    }
}
