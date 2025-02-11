<?php

namespace App\Helpers;

class VerificarSigmaEnFiltroPorColor
{
  public static function exist($sigma, $constante_z, $colores): bool
  {
    if (in_array("all", $colores) || empty($colores)) {
      return true;
    }
    if ($sigma >= 5) { // Verde
      return in_array("verdes", $colores);
    } else if ($sigma >= 3 && $sigma < 5) { // Amarillo
      return in_array("amarillos", $colores);
    } else if ($sigma >= $constante_z && $sigma < 3) { // Azul
      return in_array("azules", $colores);
    }
    return in_array("rojos", $colores);
  }
}
