<?php 
namespace app{
    class Cuenta{
        static $id_cuenta = 0;
        public $saldo;
        public $nombre_titular;
        public $tipo_moneda;

        /**
         * Get the value of id_cuenta
         */

        public function getId_cuenta()
        {
            return $this->id_cuenta;
        }

        /**
         * Set the value of id_cuenta
         *
         * @return  self
         */ 
        public function setId_cuenta($id_cuenta)
        {
            $this->id_cuenta = $id_cuenta;

            return $this;
        }

        /**
         * Get the value of saldo
         */ 
        public function getSaldo()
        {
            return $this->saldo;
        }

        /**
         * Set the value of saldo
         *
         * @return  self
         */ 
        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;

            return $this;
        }

        public function __toString()
        {
            return $this->nombre_titular. " del banco STUBanco con numero de cuenta".self::$id_cuenta." tiene ".$this->saldo." ".$this->tipo_moneda;
        }


        public function __construct($saldo, $nombre_titular, $tipo_moneda){
            self::$id_cuenta = self::$id_cuenta++;
            $this->saldo = $saldo;
            $this->nombre_titular = $nombre_titular;
            $this->tipo_moneda = $tipo_moneda;
        
    }
    }
}

