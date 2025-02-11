<?php

namespace App\Helpers;

class CalcularIET
{
  public static function get($ap_lab, $aps)
  {
    if ($ap_lab == 0 || $aps == 0) {
      return 0;
    }
    return $ap_lab / $aps;
  }
}
