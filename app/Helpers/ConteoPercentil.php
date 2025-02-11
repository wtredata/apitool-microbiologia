<?php

namespace App\Helpers;

class ConteoPercentil{
    public static function count($per3, $conteo_percentil){
        $conteo_percentil['total'] +=1;
        if($per3 <=20){
            $conteo_percentil['verde'] += 1;
        }else if(20 < $per3 && $per3<= 50) {
            $conteo_percentil['amarillo'] += 1;
        }else if(50 < $per3 && $per3 <= 80){
            $conteo_percentil['azul'] += 1;
        }else{
            $conteo_percentil['rojo'] += 1;
        }
        return $conteo_percentil;
    }

    public static function porcentaje($conteo_percentil){

       if($conteo_percentil['verde'] != 0){
            $conteo_percentil['por_verde'] = round((($conteo_percentil['verde']*100)/$conteo_percentil['total']),2);
        }else {
            $conteo_percentil['por_verde'] = 0;
        }

        if($conteo_percentil['amarillo'] != 0){
            $conteo_percentil['por_amarillo'] = round((($conteo_percentil['amarillo']*100)/$conteo_percentil['total']),2);
        }else {
            $conteo_percentil['por_amarillo'] = 0;
        }

        if($conteo_percentil['azul'] != 0){
            $conteo_percentil['por_azul'] = round((($conteo_percentil['azul']*100)/$conteo_percentil['total']),2);
        }else {
            $conteo_percentil['por_azul'] = 0;
        }

        if($conteo_percentil['rojo'] != 0){
            $conteo_percentil['por_rojo'] = round((($conteo_percentil['rojo']*100)/$conteo_percentil['total']),2);
        }else {
            $conteo_percentil['por_rojo'] = 0;
        }

        return $conteo_percentil;

    }
}

?>
