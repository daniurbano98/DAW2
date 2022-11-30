<?php

require_once("../Model/Taller.php");
require_once("./DAO.php");
use Taller;

Class TallerController{

    public function createTaller($cif,$direccion,$telefono,$facturacion,$fecha_facturacion){
        $taller = new Taller($cif,$direccion,$telefono,$facturacion,$fecha_facturacion);
        $dao = new DAO;
        $dao->createDDBB();
    }
}



?>