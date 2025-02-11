<?php

namespace App\Helpers;

class CalcularPorcentajeSesgo
{
  public static function get($media, $valor_diana)
  {
    if (($media - $valor_diana) == 0 || ($valor_diana == 0)) {
      return 0.0;
    }
    return (($media - $valor_diana) / $valor_diana) * 100;
  }
}
