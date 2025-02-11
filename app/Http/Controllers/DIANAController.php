<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\AnalitoLaboratorioController;

// Modelos
use Illuminate\Support\Facades\DB;
use App\CambioDIANA;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\DIANARequest;

// Historicos
use App\Http\Historico\DIANAHistorico;

// Sesion
use Auth;

class DIANAController extends Controller{ 


    protected $tableCambioDIANA;


    public function __construct(){
        $this->tableCambioDIANA = new CambioDIANA();
    }


    public static function GetDefaultByAnalito($id_analito_lab, $nivel){
        $tableCambioDIANA = new CambioDIANA();
        return $tableCambioDIANA
            ->where([
                ["cambio_diana.analito_lab_id_analito_lab", $id_analito_lab],
                ["cambio_diana.nivel_analito", $nivel],
                ["cambio_diana.predeterminado", 1],
            ])
            ->first();
    }


    public static function listCambiosByAnalito($id_analito_lab, $nivel_analito){
        $tableCambioDIANA = new CambioDIANA();
        return $tableCambioDIANA
            ->join("usuario","usuario.id_usuario", "=", "cambio_diana.usuario_id_usuario")
            ->where([
                ["cambio_diana.analito_lab_id_analito_lab", $id_analito_lab],
                ["cambio_diana.nivel_analito", $nivel_analito],
            ])
            ->orderBy("fecha_vigencia","desc")
            ->orderBy("predeterminado","desc")
            ->get();
    }


    public function section(Request $req){
        $analito_laboratorio = AnalitoLaboratorioController::listItem($req->id_reference);
        $cambios_diana = self::listCambiosByAnalito($req->id_reference, $req->nivel_analito);
        return view("diana.modalAsignacionDIANA")
            ->with("analito_laboratorio",$analito_laboratorio)
            ->with("cambios_diana",$cambios_diana)
            ->with("nivel",$req->nivel_analito);
    }


    public function index(Request $req){
        $cambios_diana = self::listCambiosByAnalito($req->id_reference, $req->nivel_analito);
        return view("diana.dianaIndex")
        ->with("cambios_diana",$cambios_diana);
    }


    public function resetearPredeterminadosAnalito($id_analito_lab, $nivel_analito){
        $this->tableCambioDIANA
            ->where([
                ["analito_lab_id_analito_lab",$id_analito_lab],
                ["nivel_analito",$nivel_analito]
            ])
            ->update(["predeterminado" => 0]);
    }  


    public function store(DIANARequest $req){
        $this->resetearPredeterminadosAnalito($req->analito_laboratorio, $req->nivel_analito);
        $this->tableCambioDIANA->analito_lab_id_analito_lab = $req->analito_laboratorio;
        $this->tableCambioDIANA->usuario_id_usuario = Auth::user()->id_usuario;
        $this->tableCambioDIANA->fecha_vigencia = $req->fecha_vigencia;
        $this->tableCambioDIANA->justificacion = $req->justificacion;
        $this->tableCambioDIANA->valor = $req->valor;
        $this->tableCambioDIANA->nivel_analito = $req->nivel_analito;
        $this->tableCambioDIANA->predeterminado = 1;
        $this->tableCambioDIANA->save();
    }


    public static function GetUltimoCambioByAnalito($id_analito_lab, $nivel_analito){
        $tableCambioDIANA = new CambioDIANA();
        return $tableCambioDIANA
            ->where([
                ["cambio_diana.analito_lab_id_analito_lab", $id_analito_lab],
                ["cambio_diana.nivel_analito", $nivel_analito]
            ])
            ->orderBy("fecha_vigencia","desc")
            ->orderBy("predeterminado","desc")
            ->first();
    }


    public function destroy(Request $req){
        
        DIANAHistorico::store("destroy", $req);
        
        $predeterminado = self::listItem($req->id)->predeterminado;
        
        if($predeterminado == 1){ // Si el cambio_diana es predeterminado

            // obtener el id del analito
            $id_analito_lab = self::listItem($req->id)->analito_lab_id_analito_lab;
            $nivel_analito = self::listItem($req->id)->nivel_analito;

            // Eliminar predeterminado
            $this->tableCambioDIANA
                ->where("id_cambio_diana",$req->id)
                ->delete();

            // Buscar el ultimo valor
            $ultimo_cambio = self::GetUltimoCambioByAnalito($id_analito_lab, $nivel_analito);
            $id_ultimo_cambio_diana = 0;

            if(isset($ultimo_cambio)){ // Si existe un ultimo valor de cambio

                $id_ultimo_cambio_diana = $ultimo_cambio->id_cambio_diana;

                $this->tableCambioDIANA
                    ->where("id_cambio_diana",$id_ultimo_cambio_diana)
                    ->first()
                    ->update(["predeterminado" => 1]);
            }


            // Asignar un nuevo predeterminado (el ultimo) 
        } else { // Eliminar sin preambulos
            $this->tableCambioDIANA
                ->where("id_cambio_diana",$req->id)
                ->delete();
        }

        
    }


    public static function listItem($id_cambio_diana){
        $tableCambioDIANA = new CambioDIANA();
        return $tableCambioDIANA
            ->join("usuario","usuario.id_usuario", "=", "cambio_diana.usuario_id_usuario")
            ->where("id_cambio_diana", $id_cambio_diana)
            ->first();
    }

    
    public function asignarPredeterminado(Request $req){
        
        DIANAHistorico::store("asignarPredeterminado", $req);

        // Obtener id del analito
        $id_analito_lab = self::listItem($req->id)->analito_lab_id_analito_lab;
        $nivel_analito = self::listItem($req->id)->nivel_analito;
        
        // Resetear predeterminados
        $this->resetearPredeterminadosAnalito($id_analito_lab, $nivel_analito);

        // Asignar nuevo valor como predeterminado
        $this->tableCambioDIANA
            ->where("id_cambio_diana", $req->id)
            ->first()
            ->update(["predeterminado" => 1]);

    }
    
    
    public function update(DIANARequest $req){

        DIANAHistorico::store("update", $req);

        $cambio_diana = $this->tableCambioDIANA
            ->where("id_cambio_diana",$req->id)
            ->first();

        switch($req->campo){
            case "fecha_vigencia":
                $cambio_diana->update(["fecha_vigencia" => $req->fecha_vigencia]);
                break;

            case "valor":
                $cambio_diana->update(["valor" => $req->valor]);
                break;

            case "justificacion":
                $cambio_diana->update(["justificacion" => $req->justificacion]);
                break;
        }
    }


    public function show(Request $req){

        $cambio_diana = self::ListItem($req->id);
        return view("diana.dianaShow")
            ->with("cambio_diana",$cambio_diana)
            ->with("campo",$req->campo);
    }


    public function edit(Request $req){
        $id_analito_lab = self::listItem($req->id)->analito_lab_id_analito_lab;
        $cambio_diana = self::ListItem($req->id);
        return view("diana.dianaEdit")
            ->with("cambio_diana", $cambio_diana)
            ->with("campo",$req->campo);
    }
}