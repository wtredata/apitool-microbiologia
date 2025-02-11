<?php

namespace App\Helpers;

class CalcularSR
{
  public static function get($sesgo_por, $sesgo_mp)
  {
    if ($sesgo_por == 0 || $sesgo_mp == 0) {
      return 0;
    }
    return ($sesgo_por / $sesgo_mp);
  }
}
