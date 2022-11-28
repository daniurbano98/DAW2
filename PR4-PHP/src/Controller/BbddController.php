<?php 

$db = parse_ini_file("../../db_config.ini");


var_dump($db);


$mysqli = new mysqli($db['host'], $db['user'], $db['pass'], $db['name']);
if ($mysqli->connect_errno) {
   die("error de conexión: " . $mysqli->connect_error);
}
 
// $sql = "UPDATE tabla SET columna = 'Valor' WHERE id = 1";
// $mysqli->query($sql);



?>