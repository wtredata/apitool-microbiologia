<?php

namespace App\Helpers;

class CalcularPer3
{
    public static function execute($lote_analito, $analizador_analito, $nom_analito, $constante_z, $ap_lab, $tabla_percentiles){
        foreach ($tabla_percentiles as $percentile){
            $lote_existe = false;
            foreach ($percentile['lotes'] as $lote){
                if($lote['numerolote'] == $lote_analito){
                    $lote_existe = true;
                    break;
                }
            }
            $analizador_existe = false;
            foreach ($percentile['analizadores'] as $analizador){
                if(strtolower(str_replace(" ","",$analizador['variantedelnombre'])) == strtolower(str_replace(" ","",$analizador_analito))){
                    $analizador_existe = true;
                    break;
                }
            }
            if($lote_existe && $analizador_existe){
                foreach ($percentile['analitos'] as $analito){
                    if(strtolower(str_replace(" ","",$nom_analito)) == strtolower(str_replace(" ","",$analito['analito']))){
                        switch ($constante_z) {
                            case 1.65:
                                $datosPer3 = [$analito["per10etmp1"], $analito["per30etmp1"], $analito["per50etmp1"], $analito["per70etmp1"], $analito["per90etmp1"]];
                                break;

                            case 1.96:
                                $datosPer3 = [$analito["per10etmp2"], $analito["per30etmp2"], $analito["per50etmp2"], $analito["per70etmp2"], $analito["per90etmp2"]];
                                break;

                            case 2.33:
                                $datosPer3 = [$analito["per10etmp3"], $analito["per30etmp3"], $analito["per50etmp3"], $analito["per70etmp3"], $analito["per90etmp3"]];
                                break;

                            default:
                                $datosPer3 = [$analito["per10etmp1"], $analito["per30etmp1"], $analito["per50etmp1"], $analito["per70etmp1"], $analito["per90etmp1"]];
                        }
                        if ($ap_lab < $datosPer3[0]){

                            $per3 = 5;

                        } elseif ($ap_lab == $datosPer3[0]) {

                            $per3 = 10;

                        } elseif ($ap_lab < $datosPer3[1]) {

                            $per3 = 20;

                        } elseif ($ap_lab == $datosPer3[1]) {

                            $per3 = 30;

                        } elseif ($ap_lab < $datosPer3[2]) {

                            $per3 = 40;

                        } elseif ($ap_lab == $datosPer3[2]) {

                            $per3 = 50;

                        } elseif ($ap_lab < $datosPer3[3]) {

                            $per3 = 60;

                        } elseif ($ap_lab == $datosPer3[3]) {

                            $per3 = 70;

                        } elseif ($ap_lab < $datosPer3[4]) {

                            $per3 = 80;

                        } elseif ($ap_lab == $datosPer3[4]) {

                            $per3 = 90;

                        } else {

                            $per3 = 95;
                        }
                        return [$analito["nper"], $per3];
                    }
                }
            }
        }
        return ["N/A", "N/A"];
    }
}
