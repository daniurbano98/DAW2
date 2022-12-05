<?php

require_once("../Model/Taller.php");
require_once("DAO.php");
use Monolog\Handler\StreamHandler;
 use Monolog\Logger;
use Model\Taller;
use Controller\DAO;


Class TallerController{
    private $log;

    public function __construct()
      {
         $this->log = new Logger("app.log");
         $this->log->pushHandler(new StreamHandler('../../app.log', Logger::INFO)); 
      }

    public function insertRecord($cif,$direccion,$telefono,$facturacion,$fecha_facturacion){

        if(!empty($cif) && !empty($direccion) && !empty($telefono) && !empty($facturacion) && !empty($fecha_facturacion)){ //comprobamos que no esten vacios
            if (strlen($cif) > 9){ 
                $this->log->warning("Controller - Se introducirán los primeros 9 numeros del cif");
                $newCif = substr($cif, 0, 9);
                $taller = new Taller($newCif,$direccion,$telefono,$facturacion,$fecha_facturacion);
                $dao = new DAO;
                $dao->insert($taller);
            }
            else{
                $taller = new Taller($cif,$direccion,$telefono,$facturacion,$fecha_facturacion);
                $dao = new DAO;
                $dao->insert($taller);
            }  
               
        }else{
            $this->log->warning("Controller - Campos incompletos, por favor no deje campos vacios.");
        }
        
    }

   
}



?>