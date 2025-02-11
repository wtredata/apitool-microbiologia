<?php

namespace App\Helpers;

class ConteoPorMetricaSigma
{
  public static function count($sigma, $constante_z, $datos_conteo_metrica_sigma_r)
  {
    $datos_conteo_metrica_sigma_r['Total'] += 1;
    if ($sigma >= 5) { // Verde
      $datos_conteo_metrica_sigma_r['>= 5σ'] += 1;
    } else if ($sigma >= 3 && $sigma < 5) { // Amarillo
      $datos_conteo_metrica_sigma_r['>= 3σ ^ < 5σ'] += 1;
    } else if ($sigma >= $constante_z && $sigma < 3) { // Azul
      $datos_conteo_metrica_sigma_r['>= Zσ ^ < 3σ'] += 1;
    } else { // Rojo
      $datos_conteo_metrica_sigma_r['< Zσ'] += 1;
    }
    return $datos_conteo_metrica_sigma_r;
  }
}
