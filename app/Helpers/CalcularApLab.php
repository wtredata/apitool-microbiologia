<?php

namespace App\Helpers;

class CalcularApLab
{
  public static function get($constante_z, $sesgo_por, $cv): float
  {
    $resultado = ($constante_z * $cv) + abs($sesgo_por);
    return round($resultado, 2);
  }
}
