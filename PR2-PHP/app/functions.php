<?php 
    class functions{

        public static function consultarSaldo($array,$comparacion){
            foreach ($array as $user) {
                if ($user->getId_cuenta() == $comparacion) {
                    echo $user->getSaldo();
                }
            }
        }

    }





?>