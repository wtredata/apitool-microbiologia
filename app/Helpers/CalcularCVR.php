<?php

namespace App\Helpers;

class CalcularCVR
{
  public static function get($cv, $cv_mp)
  {
    if ($cv_mp == 0 || $cv == 0) {
      return 0;
    }
    return ($cv / $cv_mp);
  }
}
