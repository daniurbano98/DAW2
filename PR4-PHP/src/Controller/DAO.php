<?php 
 require './vendor/autoload.php';
 use Monolog\Handler\StreamHandler;
 use Monolog\Logger;
 
 
      

class DAO{
      
      private $log;
      private $db;

      public function __construct()
      {
         $this->log = new Monolog\Logger("LogCarsManagementDB");
         $this->log->pushHandler(new StreamHandler(__DIR__ . '../../app.log', Logger::DEBUG));
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

   public function createDDBB(){
    
      $conexion = $this->checkConnection();

     if($conexion==true){
         $sql_bbdd = "CREATE DATABASE taller_ddbb";
         $sql_table = "CREATE TABLE IF NOT EXISTS TALLER (cif_taller VARCHAR(9) PRIMARY KEY, nombre VARCHAR(50), direccion VARCHAR(100),
                                                      telefono CHAR(9), facturacion INT, fecha_facturacion DATE);";

         $result_bbdd = $conexion->query($sql_bbdd);
         $result_table = $conexion->query($sql_table);

         if($result_bbdd && $result_table){
            $this->log->info("Se ha creado la bbdd y la tabla con éxito");
         }else{
            $this->log->warning("No se ha podido crear la bbdd");
              }
         
     }else{
         $this->log->warning("No se ha podido crear la bbdd");
     }
      $conexion->close();
   }
  
    

   public function insert($taller){

      $conexion = $this->checkConnection();

      if($conexion==true){
         $cif = $taller->getCif_taller();
         $nombre = $taller->getDireccion();
         $direccion = $taller->getTelefono();
         $telefono = $taller->getFacturacion();
         $facturacion = $taller->getFacturacion();
         $fecha_facturacion = $taller->getFecha_facturacion();


         $sql = "INSERT INTO TALLER (cif_taller, nombre, direccion, telefono, facturacion, fecha_facturacion)
                  VALUES ($cif,$nombre,$direccion,$telefono,$facturacion,$fecha_facturacion)";

         $result = $conexion->query($sql);
               
         if($result){
            $this->log->info("Se ha insertado el registro con éxito");
         }else{
            $this->log->warning("No se ha podido insertar el registro");
            }
      }
   }
}