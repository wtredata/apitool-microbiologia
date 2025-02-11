<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\AnalitoLaboratorioController;
use App\Http\Controllers\VariabilidadBiologicaController;
use App\Http\Controllers\ConstanteController;

// Modelos
use Illuminate\Support\Facades\DB;
use App\CambioAPS;

// Historicos
use App\Http\Historico\APSHistorico;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\APSRequest;

// Sesion
use Auth;

class APSController extends Controller{ 

    protected $tableCambioAPS;
    
    public function __construct(){
        $this->tableCambioAPS = new CambioAPS();
    }


    public static function GetDefaultByAnalito($id_analito_lab){
        $tableCambioAPS = new CambioAPS();
        $cambio_aps = $tableCambioAPS
            ->join("variabilidad_biologica","variabilidad_biologica.id_variabilidad_biologica", "=", "cambio_aps.variabilidad_biologica_id_variabilidad_biologica")
            ->join("fuente_etmp","fuente_etmp.id_fuente_etmp", "=", "variabilidad_biologica.fuente_etmp_id_fuente_etmp")
            ->where([
                ["cambio_aps.analito_lab_id_analito_lab", $id_analito_lab],
                ["cambio_aps.predeterminado", 1],
            ])
            ->first();
        return self::procesarAPS($cambio_aps, $id_analito_lab, "id_analito_lab");
    }


    public static function listItem($id_cambio_aps){
        $tableCambioAPS = new CambioAPS();
        $cambio_aps = $tableCambioAPS
            ->join("variabilidad_biologica","variabilidad_biologica.id_variabilidad_biologica", "=", "cambio_aps.variabilidad_biologica_id_variabilidad_biologica")
            ->join("fuente_etmp","fuente_etmp.id_fuente_etmp", "=", "variabilidad_biologica.fuente_etmp_id_fuente_etmp")
            ->join("usuario","usuario.id_usuario", "=", "cambio_aps.usuario_id_usuario")
            ->where("id_cambio_aps", $id_cambio_aps)
            ->first();

        return self::procesarAPS($cambio_aps, $cambio_aps->analito_lab_id_analito_lab, "id_analito_lab");
    }


    public static function GetUltimoCambioByAnalito($id_analito_lab){
        $tableCambioAPS = new CambioAPS();
        return $tableCambioAPS
            ->join("variabilidad_biologica","variabilidad_biologica.id_variabilidad_biologica", "=", "cambio_aps.variabilidad_biologica_id_variabilidad_biologica")
            ->join("fuente_etmp","fuente_etmp.id_fuente_etmp", "=", "variabilidad_biologica.fuente_etmp_id_fuente_etmp")
            ->where([
                ["cambio_aps.analito_lab_id_analito_lab", $id_analito_lab]
            ])
            ->orderBy("fecha_vigencia","desc")
            ->orderBy("predeterminado","desc")
            ->first();
    }


    public static function listCambiosByAnalito($id_analito_lab){
        $tableCambioAPS = new CambioAPS();
        $obj_aps = $tableCambioAPS
            ->join("variabilidad_biologica","variabilidad_biologica.id_variabilidad_biologica", "=", "cambio_aps.variabilidad_biologica_id_variabilidad_biologica")
            ->join("fuente_etmp","fuente_etmp.id_fuente_etmp", "=", "variabilidad_biologica.fuente_etmp_id_fuente_etmp")
            ->join("usuario","usuario.id_usuario", "=", "cambio_aps.usuario_id_usuario")
            ->where("cambio_aps.analito_lab_id_analito_lab", $id_analito_lab)
            ->orderBy("fecha_vigencia","desc")
            ->orderBy("predeterminado","desc")
            ->get();
        return self::procesarMultiplesAPS($obj_aps, $id_analito_lab, "id_analito_lab");
    }


    public static function procesarMultiplesAPS($obj_aps, $id_analito_lab, $columna_bd){ // Retorna el objeto de variabilidad

        switch($columna_bd){
            case "id_analito_lab":
                $constante_z = ConstanteController::getByAnalitoLaboratorio($id_analito_lab);
                break;
        }

        foreach($obj_aps as $obj_aps_act){
            $valor_limite = $obj_aps_act->valor_limite;
            $sesgo_mp = $obj_aps_act->sesgo_mp;
            $cv_mp = $obj_aps_act->cv_mp;
    
            if($valor_limite == null){ // Si es necesario calcular el limite 
                $new_valor_limite = ($constante_z * $obj_aps_act->cv_mp) + abs($obj_aps_act->sesgo_mp);
                $obj_aps_act->valor_limite = $new_valor_limite;   
            }
        }
        return $obj_aps;
    }


    public static function procesarAPS($obj_aps, $id_analito_lab, $columna_bd){ // Retorna el objeto de variabilidad

        switch($columna_bd){
            case "id_analito_lab":
                $constante_z = ConstanteController::getByAnalitoLaboratorio($id_analito_lab);
                break;
        }

        if(isset($obj_aps)){
            $valor_limite = $obj_aps->valor_limite;
            $sesgo_mp = $obj_aps->sesgo_mp;
            $cv_mp = $obj_aps->cv_mp;
    
            if($valor_limite == null){ // Si es necesario calcular el limite 
                $new_valor_limite = ($constante_z * $obj_aps->cv_mp) + abs($obj_aps->sesgo_mp);
                $obj_aps->valor_limite = $new_valor_limite;   
            }
        }
        return $obj_aps;
    }


    
    public function index(Request $req){
        $cambios_aps = self::listCambiosByAnalito($req->id_reference);
        return view("aps.apsIndex")
            ->with("cambios_aps",$cambios_aps);
    }


    public static function listAllByAnalito($id_analito_lab){
        $id_analito = AnalitoLaboratorioController::listItem($id_analito_lab)->analito_id_analito;
        return VariabilidadBiologicaController::listByAnalito($id_analito, $id_analito_lab);
    }


    public function section(Request $req){
        
        $analito_laboratorio = AnalitoLaboratorioController::listItem($req->id_reference);
        $apss = self::listAllByAnalito($req->id_reference);
        $cambios_aps = self::listCambiosByAnalito($req->id_reference);

        return view("aps.modalAsignacionError")
            ->with("analito_laboratorio",$analito_laboratorio)
            ->with("cambios_aps",$cambios_aps)
            ->with("apss",$apss);
    }


    public function resetearPredeterminadosAnalito($id_analito_lab){
        $this->tableCambioAPS
            ->where("analito_lab_id_analito_lab",$id_analito_lab)
            ->update(["predeterminado" => 0]);
    }  


    public function store(APSRequest $req){
        $this->resetearPredeterminadosAnalito($req->analito_laboratorio);
        $this->tableCambioAPS->analito_lab_id_analito_lab = $req->analito_laboratorio;
        $this->tableCambioAPS->variabilidad_biologica_id_variabilidad_biologica = $req->aps;
        $this->tableCambioAPS->usuario_id_usuario = Auth::user()->id_usuario;
        $this->tableCambioAPS->fecha_vigencia = $req->fecha_vigencia;
        $this->tableCambioAPS->justificacion = $req->justificacion;
        $this->tableCambioAPS->predeterminado = 1;
        $this->tableCambioAPS->save();
    }


    public function asignarPredeterminado(Request $req){

        APSHistorico::store("asignarPredeterminado", $req);

        // Obtener id del analito
        $id_analito_lab = self::listItem($req->id)->analito_lab_id_analito_lab;
        
        // Resetear predeterminados
        $this->resetearPredeterminadosAnalito($id_analito_lab);

        // Asignar nuevo valor como predeterminado
        $this->tableCambioAPS
            ->where("id_cambio_aps", $req->id)
            ->first()
            ->update(["predeterminado" => 1]);

    }


    public function update(APSRequest $req){

        APSHistorico::store("update", $req);

        $cambio_aps = $this->tableCambioAPS
            ->where("id_cambio_aps",$req->id)
            ->first();

        switch($req->campo){
            case "fecha_vigencia":
                $cambio_aps->update(["fecha_vigencia" => $req->fecha_vigencia]);
                break;

            case "valor_limite":
                $cambio_aps->update(["variabilidad_biologica_id_variabilidad_biologica" => $req->valor_limite]);
                break;

            case "justificacion":
                $cambio_aps->update(["justificacion" => $req->justificacion]);
                break;
        }
    }


    public function destroy(Request $req){
        
        APSHistorico::store("destroy", $req);
        
        $predeterminado = self::listItem($req->id)->predeterminado;
        
        if($predeterminado == 1){ // Si el cambio_aps es predeterminado

            // obtener el id del analito
            $id_analito_lab = self::listItem($req->id)->analito_lab_id_analito_lab;

            // Eliminar predeterminado
            $this->tableCambioAPS
                ->where("id_cambio_aps",$req->id)
                ->delete();

            // Buscar el ultimo valor
            $ultimo_cambio = self::GetUltimoCambioByAnalito($id_analito_lab);
            $id_ultimo_cambio_aps = 0;

            if(isset($ultimo_cambio)){ // Si existe un ultimo valor de cambio

                $id_ultimo_cambio_aps = $ultimo_cambio->id_cambio_aps;

                $this->tableCambioAPS
                    ->where("id_cambio_aps",$id_ultimo_cambio_aps)
                    ->first()
                    ->update(["predeterminado" => 1]);
            }


            // Asignar un nuevo predeterminado (el ultimo) 
        } else { // Eliminar sin preambulos
            $this->tableCambioAPS
                ->where("id_cambio_aps",$req->id)
                ->delete();
        }

        
    }


    public function show(Request $req){

        $cambio_aps = self::ListItem($req->id);
        return view("aps.apsShow")
            ->with("cambio_aps",$cambio_aps)
            ->with("campo",$req->campo);
    }


    public function edit(Request $req){
        $id_analito_lab = self::listItem($req->id)->analito_lab_id_analito_lab;
        $cambio_aps = self::ListItem($req->id);
        $apss = self::listAllByAnalito($id_analito_lab);
        return view("aps.apsEdit")
            ->with("cambio_aps", $cambio_aps)
            ->with("apss", $apss)
            ->with("campo",$req->campo);
    }
}