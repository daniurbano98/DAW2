<?php 
namespace app;
    class Cuenta{
        private $id_cuenta;
        private $saldo;
        private $nombre_titular;
        private $tipo_moneda;

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

        public function getNombre(){
            return $this->nombre_titular;
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
            return "<br>".$this->nombre_titular. " del banco STUBanco <br>con numero de cuenta ".$this->id_cuenta."<br> saldo: ".$this->saldo." ".$this->tipo_moneda."<br>-------------------";
        }


        public function __construct($saldo, $nombre_titular, $tipo_moneda){
            $this->saldo = $saldo;
            $this->nombre_titular = $nombre_titular;
            $this->tipo_moneda = $tipo_moneda;
        
    }

    
    
}

