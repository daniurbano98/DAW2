<?php
require_once("prototipus.php");

/* 
  SERIE 1 : 
    - Recorrido = 37,
    - Recorrido no-negativos = 14
    - Simétricos = [ 2, 4 ]
    - Limpieza = [ -23, -4, -2, 0, 1, 2, 3, 4, 5, 6, 14 ]
*/
$SERIE1 = [ 1, 3, 6, 2, 5, -2, 5, -4, 1, 0, 14, 1, -23, 6, 4, 3, 2, 5 ];
test("Serie 1", $SERIE1);

/* 
  SERIE 2 : 
    - Recorrido = 7,
    - Recorrido no-negativos = 5
    - Simétricos = [ 1 ]
    - Limpieza = [ -2, -1, 0, 1, 2, 3, 4, 5 ]
*/
$SERIE2 = [ -1, 0, 1, 2, 3, 4, 5, 4, 3, 2, 1, 0, -1, -2 ];
test("Serie 2", $SERIE2);

/* 
  SERIE 3 : 
    - Recorrido = 0,
    - Recorrido no-negativos = 0
    - Simétricos = [ ]
    - Limpieza = [ ]
*/
$SERIE3 = [];
test("Serie 3", $SERIE3);

/* 
  SERIE 4 : 
    - Recorrido = 4,
    - Recorrido no-negativos = 0
    - Simétricos = [ ]
    - Limpieza = [ -3, 1 ]
*/
$SERIE4 = [ 'a', '3', 1, -3 ];
test("Serie 4", $SERIE4);


// Método de pruebas
function test($nombre, $serie) {
  echo "\n" . $nombre . "\n----------\n";
  echo "RECORRIDO  = " . recorrido($serie). "\n";
  echo "NO-NEGATIVOS = [ " . implode(", ", noNegativos($serie)) . " ]\n";
  echo "REC. NO-NEGATIVOS " . recorrido(noNegativos($serie)) . "\n";
  echo "SIMÉTRICOS   = [ " . implode(", ", simetricos($serie)) . " ]\n";
  echo "LIMPIEZA      = [ " . implode(", ", limpieza($serie)) . " ]\n";
  echo "BUSCAR = " . buscar($serie,2);
}

