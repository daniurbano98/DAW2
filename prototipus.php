<?php
/**
 * Método para calcular el recorrido de una serie numérica
 * El valor devuelto es la diferencia entre el valor más grande y más chico.
 * @param array $datos La serie numérica de datos.
 * @retval int La diferencia entre los valores máximo y mínimo
 */
function recorrido($datos) {
  $max=0;
  $min=0;

  if(!empty($datos)){
    $array = [];

    for ($i=0; $i < sizeof($datos) ; $i++) { 
      if(is_int($datos[$i])){
        $array[$i] = $datos[$i];
      }
    }
   $max = max($array);
   $min = min($array);
  }

    
  $diferencia = $max - $min;
      
  return $diferencia;
}

/**
 * Método para eliminar de un array los elementos negativos que cuente.
 * El array resultante no incluirá los valores no numéricos ni los negativos
 * @param array $datos La serie numérica de datos de entrada 
 * @retval array La serie numérica resultante.
 */
function noNegativos($datos) {
  $array=[];

    for ($i=0; $i <sizeof($datos) ; $i++) { 
      if($datos[$i]<0){
        unset($datos[$i]);
      }
      else if(!is_int($datos[$i])){
        unset($datos[$i]);
      }
      else{
        $array[$i] = $datos[$i];
      }
    }
  return $array;
}

/**
 * Método para saber si un valor se encuentra presente en un array
 * Si el valor no es numérico, devolverá falso.
 * @param array $datos La serie numérica de datos de entrada.
 * @param int $valor El valor a buscar.
 * @retval boolean Se ha encontrado o no el valor.
 */
function buscar($datos, $valor) {
    for ($i=0; $i <sizeof($datos) ; $i++) { 
        if($datos[$i]==$valor){
          return true;
        }
    }
  return false;
}

/**
 * Método para enconrar los valores simétricos de un array.
 * El array resultante contendrá los valores positivos que también estén
 * presentes en forma negativa. Per ejemplo, si el array cuenta 2 i -2, 
 * el resultado incluirá el valor 2 en el array resultante.
 * Si un valor aparece más de una vez, lo devolverá solo una vez.
 * @param array $datos La serie numérica de datos de entrada.
 * @retval array La serie numérica resultante.
 */
function simetricos($datos) {
  // TODO
  return [];
}

/**
 * Método para ordenar un array sin valores inválidos ni repetidos
 * El array resultante no contendrá valores inválidos (no numéricos)
 * y además eliminará repetidos. El array resultante ha de ser ordenado de
 * menor a mayor.
 * Si se pide con el segundo parámetro opcional, el método también quitará
 * los valores negativos de la operación.
 * @param array $datos La serie numérica de datos de entrada 
 * @param boolean $noNegatius Indica si se han de eliminar los negativos
 * @retval array La serie numérica resultante.
 */

function limpieza($datos, $noNegativos = false) {
    $array = [];

    for ($i=0; $i <sizeof($datos) ; $i++) { 
      if($datos[$i]<0){
        unset($datos[$i]);
      }
      else if(!is_int($datos[$i])){
        unset($datos[$i]);
      }else{
        $array[$i] = $datos[$i];
      }
    }
    array_unique($array);
    
  return $array;
}

