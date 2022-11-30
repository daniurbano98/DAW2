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
     
      $mysqli = new mysqli($this->db['host'], $this->db['user'], $this->db['pass'], $this->db['name']);
      if ($mysqli->connect_errno) {
         $this->log->info('error');
         die("error de conexión: " . $mysqli->connect_error);
      }else{
         $this->log->info('conexión establecida');
         return $mysqli;
      }
   }
  
    public function createTaller(){
      $conexion = $this->checkConnection();

     if($conexion==true){
      $sql = "CREATE TABLE IF NOT EXISTS TALLER (cif_taller VARCHAR(9) PRIMARY KEY, nombre VARCHAR(50), direccion VARCHAR(100),
                                                      telefono CHAR(9), facturacion INT, fecha_facturacion DATE);";
      $result = $conexion->query($sql);

      if($result){
         $this->log->info("Se ha creado la tabla con éxito");
      }else{
         $this->log->warning("No se ha podido crear la tabla");
           }
         }
     }

 

   public function insert($cif,$nombre,$direccion,$telefono,$facturacion,$fecha_facturacion){

      $conexion = $this->checkConnection();

      if($conexion==true){
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