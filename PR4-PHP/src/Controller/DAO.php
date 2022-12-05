<?php 
namespace Controller;
 require '../../vendor/autoload.php';

use Exception;
use Monolog\Handler\StreamHandler;
 use Monolog\Logger;
 use mysqli;

 
 
class DAO{
      
      private $log;
      private $db;

      public function __construct()
      {
         $this->log = new Logger("app.log");
         $this->log->pushHandler(new StreamHandler('../../app.log', Logger::INFO));
         $this->db=parse_ini_file("../../db_config.ini");
      }


   public function checkConnection(){
     
      $mysqli = new mysqli($this->db['host'], $this->db['user'], $this->db['pass']);
      if ($mysqli->connect_errno) {
         $this->log->info('error de conexion');
         die("error de conexión: " . $mysqli->connect_error);
      }else{
         $this->log->info('conexión establecida');
         return $mysqli;
      }
   }



   public function insert($taller){
    
      $conexion = $this->checkConnection();
         
         
         $sql_bbdd = "CREATE DATABASE taller_ddbb";
        
         $sql_table = "CREATE TABLE taller_ddbb.TALLER (cif_taller VARCHAR(9) PRIMARY KEY, nombre VARCHAR(50), direccion VARCHAR(100),
                                                      telefono CHAR(9), facturacion INT, fecha_facturacion DATE);";
         $cif = $taller->getCif_taller();
         $nombre = $taller->getDireccion();
         $direccion = $taller->getTelefono();
         $telefono = $taller->getFacturacion();
         $facturacion = $taller->getFacturacion();
         $fecha_facturacion = $taller->getFecha_facturacion();

         $sql_insert = "INSERT INTO TALLER (cif_taller, nombre, direccion, telefono, facturacion, fecha_facturacion)
                        VALUES ('".$cif."','".$nombre."','".$direccion."','".$telefono."','".$facturacion."','".$fecha_facturacion."')";
         
         

         try{
             $conexion->query($sql_bbdd);
             $this->log->info("Se ha creado la bbdd correctamente");
         }catch(Exception $e){
               $this->log->warning("No se ha podido crear la bbdd porque ya esta creada");
         }

         try{
             $conexion->query($sql_table);
             $this->log->info("Se ha creado la tabla correctamente");
         }catch(Exception $e){
               $this->log->warning("No se ha podido crear la tabla porque ya esta creada");
         }

         try{
             $conexion->select_db("taller_ddbb");
             $conexion->query($sql_insert);
             $this->log->info("Se ha insertado correctamente");
         }catch(Exception $e){
               $this->log->error("No se ha podido crear el insert");
         }
            
      $conexion->close();
   }
  
}