<?php

namespace App\Helpers;

use App\Http\Controllers\AnalitoLaboratorioController;
use Illuminate\Support\Carbon;

class FechaDinamica {

    public static function HoraNocturna($fecha_final){
        
        $fecha_final = strtotime($fecha_final);
        $fecha_final = strtotime("+23 hours", $fecha_final);
        $fecha_final = strtotime("+59 minute", $fecha_final);
        $fecha_final = strtotime("+59 second", $fecha_final);
        return Date("Y/m/d H:i:s", $fecha_final);
    }

    public static function RestarDias($fecha_p, $dias){
        $fecha = strtotime($fecha_p);
        $fecha = strtotime("-$dias days", $fecha);
        return Date("Y-m-d", $fecha);
    }

    public static function BlockByCaducidad($id_analito_lab){
        $fecha_vencimiento = Carbon::parse(AnalitoLaboratorioController::listItem($id_analito_lab)->fecha_vencimiento);
        $dia_actual = Carbon::parse(Date("Y-m-d"));
        $dias_diferencia = $dia_actual->diffInDays($fecha_vencimiento, false);
        return $dias_diferencia < 0;
    }
}