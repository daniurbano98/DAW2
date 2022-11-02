<?php

/**
 * Método para calcular el recorrido de una serie numérica
 * El valor devuelto es la diferencia entre el valor más grande y más chico.
 * @param array $datos La serie numérica de datos.
 * @retval int La diferencia entre los valores máximo y mínimo
 */
function recorrido($datos)
{

  if (!empty($datos)) {
    $array = [];

    foreach ($datos as $key => $value) {
      if (is_int($value)) {
        array_push($array, $value);
      }
    }


    $max = max($array);
    $min = min($array);

    $diferencia = $max - $min;

    return $diferencia;
  } else {
    return 0;
  }
}

/**
 * Método para eliminar de un array los elementos negativos que cuente.
 * El array resultante no incluirá los valores no numéricos ni los negativos
 * @param array $datos La serie numérica de datos de entrada 
 * @retval array La serie numérica resultante.
 */
function noNegativos($datos)
{

  if (!empty($datos)) {

    $array = [];

    foreach ($datos as $key => $value) {
      if (is_int($value)) {
        array_push($array, $value);
      }
    }
    $noNegativos = [];

    foreach ($array as $key => $value) {
      if ($value >= 0) {
        array_push($noNegativos, $value);
      }
    }
    return $noNegativos;
  } else {
    return [];
  }
}

/**
 * Método para saber si un valor se encuentra presente en un array
 * Si el valor no es numérico, devolverá falso.
 * @param array $datos La serie numérica de datos de entrada.
 * @param int $valor El valor a buscar.
 * @retval boolean Se ha encontrado o no el valor.
 */
function buscar($datos, $valor)
{
  if (!empty($datos)) {
    if (!is_int($valor)) {
      return  "false";
    } else {
      foreach ($datos as $key => $value) {
        if ($value == $valor) {
          return "true";
        }       
      }
      return "false";
    }
  } else {
    return  "false";
  }
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
function simetricos($datos)
{
  if (!empty($datos)) {

    $arrayPositivos = [];
    $arrayNegativos = [];
    $arrayCoincidencias = [];




    foreach ($datos as $key => $value) {
      if (is_int($value) && $value >= 0) {
        array_push($arrayPositivos, $value);
      } else if (is_int($value) && $value < 0) {
        array_push($arrayNegativos, $value);
      }
    }

    foreach ($arrayPositivos as $key => $value) {
      if (in_array($value * (-1), $arrayNegativos)) {
        array_push($arrayCoincidencias, $value);
      }
    }

    $arrayLimpio = array_unique($arrayCoincidencias, SORT_NUMERIC);
    return $arrayLimpio;
  } else {
    return [];
  }
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

function limpieza($datos, $noNegativos = false)
{

  if (!empty($datos)) {
    $array = [];
    $arrayFinal = [];

    if ($noNegativos = true) {
      foreach ($datos as $key =>  $value) {
        if (is_int($value)) {
          array_push($array, $value);
        }
      }

      foreach ($array as $key => $value) {
        if ($value < 0) {
          unset($array[$value]);
        }
      }
      $arrayFinal = array_unique($array);
      sort($arrayFinal);
      return $arrayFinal;
    } else {

      foreach ($datos as $key => $value) {
        if (is_int($value)) {
          array_push($array, $value);
        }
        $arrayFinal = array_unique($array);
        sort($arrayFinal);
        return $arrayFinal;
      }
    }
  } else {
    return [];
  }
}
