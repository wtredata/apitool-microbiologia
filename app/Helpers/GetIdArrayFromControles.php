<?php

namespace App\Helpers;

class GetIdArrayFromControles
{
  public static function get($controles, $control_filter): array
  {
    $controles_ids = array();
    foreach ($controles as $control) {
      if (
        empty($control_filter)
        || in_array("all", $control_filter)
        || in_array($control->id_control_laboratorio, $control_filter)
      ) {
        $controles_ids[] = $control->id_control_laboratorio;
      }
    }
    return $controles_ids;
  }
}
