<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\CorridaAreaController;
use App\Http\Controllers\AnalitoController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\ModoController;
use App\Http\Controllers\UnidadController;

// Modelos
use App\CorridaAnalito;
use Illuminate\Support\Facades\DB;

// Historicos
use App\Http\Historico\CorridaAnalitoHistorico;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\CorridaAnalitoRequest;

class CorridaAnalitoController extends Controller{
    protected $tableCorridaAnalito;
    protected $historico;
    
    public function __construct(){
        $this->tableCorridaAnalito = new CorridaAnalito();
    }
    

    public function section(Request $req){
        
        $corridasArea = CorridaAreaController::listAll();
        $modos = ModoController::list();
        $analitosCorrida = self::listByCorrida(0);
        
        return view("corridaAnalito.corridaAnalitoSection")
            ->with("nomSection","SeeSectionCorridaAnalito")
            ->with("corridasArea",$corridasArea)
            ->with("analitosCorrida",$analitosCorrida)
            ->with("modos",$modos)
            ->with("id_reference",$req->id_reference);
    }


    public function create(){
        $laboratorios = LaboratorioController::listAll();
        $areas = AreaController::list();
        return view("corridaArea.corridaAreaCreate")
            ->with("laboratorios",$laboratorios)
            ->with("areas",$areas);
    }
    
    
    public function index(Request $req){
        
        $analitosCorrida = self::listByCorrida($req->id_reference);

        return view("corridaAnalito.corridaAnalitoIndex")
            ->with("analitosCorrida",$analitosCorrida);
    }
    
    
    public function store(CorridaAnalitoRequest $req){
        
        $this->historico = new CorridaAnalitoHistorico();
        $this->historico->store("store", $req);

        $this->tableCorridaAnalito->corrida_area_id_corrida_area = $req->id_corrida_area;
        $this->tableCorridaAnalito->analito_id_analito = $req->id_analito;
        $this->tableCorridaAnalito->metodologia_prueba = $req->id_metodologia_prueba;
        $this->tableCorridaAnalito->metodologia_comparacion = $req->id_metodologia_comparacion;
        $this->tableCorridaAnalito->analizador_prueba = $req->id_analizador_prueba;
        $this->tableCorridaAnalito->analizador_comparacion = $req->id_analizador_comparacion;
        $this->tableCorridaAnalito->modo_metodologia_prueba = $req->id_modo_metodologia_prueba;
        $this->tableCorridaAnalito->modo_metodologia_comparacion = $req->id_modo_metodologia_comparacion;
        $this->tableCorridaAnalito->unidad_metodologia_prueba = $req->id_unidad_prueba;
        $this->tableCorridaAnalito->unidad_metodologia_comparacion = $req->id_unidad_comparacion;
        $this->tableCorridaAnalito->save();
    }
    
    public static function listByCorrida($id_corrida_area){
        $tableCorridaAnalito = new CorridaAnalito();
        return $tableCorridaAnalito
            ->select(
                "corrida_area.*",
                "corrida_analito.estado as estado_corrida_analito",
                "corrida_analito.id_corrida_analito as id_corrida_analito",
                "analito.*",
                "metodologia_prueba.nom_metodologia as nom_metodologia_prueba",
                "metodologia_comparacion.nom_metodologia as nom_metodologia_comparacion",
                "analizador_prueba.nom_analizador as nom_analizador_prueba",
                "analizador_comparacion.nom_analizador as nom_analizador_comparacion",
                "modo_metodologia_prueba.nom_modo as nom_modo_metodologia_prueba",
                "modo_metodologia_comparacion.nom_modo as nom_modo_metodologia_comparacion",
                "unidad_metodologia_prueba.nom_unidad as nom_unidad_metodologia_prueba",
                "unidad_metodologia_comparacion.nom_unidad as nom_unidad_metodologia_comparacion"
            )
            ->join("corrida_area", "corrida_analito.corrida_area_id_corrida_area", "=", "corrida_area.id_corrida_area")
            ->join("analito", "analito.id_analito", "=", "corrida_analito.analito_id_analito")
            ->join("metodologia as metodologia_prueba", "metodologia_prueba.id_metodologia", "=", "corrida_analito.metodologia_prueba")
            ->join("metodologia as metodologia_comparacion", "metodologia_comparacion.id_metodologia", "=", "corrida_analito.metodologia_comparacion")
            ->join("modo as modo_metodologia_prueba", "modo_metodologia_prueba.id_modo", "=", "corrida_analito.modo_metodologia_prueba")
            ->join("modo as modo_metodologia_comparacion", "modo_metodologia_comparacion.id_modo", "=", "corrida_analito.modo_metodologia_comparacion")
            ->join("unidad as unidad_metodologia_prueba", "unidad_metodologia_prueba.id_unidad", "=", "corrida_analito.unidad_metodologia_prueba")
            ->join("unidad as unidad_metodologia_comparacion", "unidad_metodologia_comparacion.id_unidad", "=", "corrida_analito.unidad_metodologia_comparacion")
            ->join("analizador as analizador_prueba", "analizador_prueba.id_analizador", "=", "corrida_analito.analizador_prueba")
            ->join("analizador as analizador_comparacion", "analizador_comparacion.id_analizador", "=", "corrida_analito.analizador_comparacion")
            ->where([
                ["corrida_area.id_corrida_area", $id_corrida_area],
            ])
            ->get();
    }


    public static function listItem($id_referencia){
        $tableCorridaAnalito = new CorridaAnalito();
        return $tableCorridaAnalito
            ->select(
                "corrida_analito.corrida_area_id_corrida_area", 
                "corrida_analito.analito_id_analito", 
                "corrida_analito.metodologia_prueba",
                "corrida_analito.analizador_prueba",
                "corrida_analito.modo_metodologia_prueba", 
                "corrida_analito.unidad_metodologia_prueba", 
                "corrida_analito.metodologia_comparacion", 
                "corrida_analito.analizador_comparacion", 
                "corrida_analito.modo_metodologia_comparacion", 
                "corrida_analito.unidad_metodologia_comparacion", 
                "corrida_area.*",
                "corrida_analito.estado as estado_corrida_analito",
                "corrida_analito.id_corrida_analito as id_corrida_analito",
                "analito.*",
                "area.*",
                "metodologia_prueba.nom_metodologia as nom_metodologia_prueba",
                "metodologia_comparacion.nom_metodologia as nom_metodologia_comparacion",
                "modo_metodologia_prueba.nom_modo as nom_modo_metodologia_prueba",
                "modo_metodologia_comparacion.nom_modo as nom_modo_metodologia_comparacion",
                "unidad_metodologia_prueba.nom_unidad as nom_unidad_metodologia_prueba",
                "unidad_metodologia_comparacion.nom_unidad as nom_unidad_metodologia_comparacion",
                "laboratorio.*",
                "analizador_prueba.nom_analizador as nom_analizador_prueba",
                "analizador_comparacion.nom_analizador as nom_analizador_comparacion",
            )
            ->join("corrida_area", "corrida_analito.corrida_area_id_corrida_area", "=", "corrida_area.id_corrida_area")
            ->join("area", "area.id_area", "=", "corrida_area.area_id_area")
            ->join("analito", "analito.id_analito", "=", "corrida_analito.analito_id_analito")
            ->join("metodologia as metodologia_prueba", "metodologia_prueba.id_metodologia", "=", "corrida_analito.metodologia_prueba")
            ->join("metodologia as metodologia_comparacion", "metodologia_comparacion.id_metodologia", "=", "corrida_analito.metodologia_comparacion")
            ->join("modo as modo_metodologia_prueba", "modo_metodologia_prueba.id_modo", "=", "corrida_analito.modo_metodologia_prueba")
            ->join("modo as modo_metodologia_comparacion", "modo_metodologia_comparacion.id_modo", "=", "corrida_analito.modo_metodologia_comparacion")
            ->join("unidad as unidad_metodologia_prueba", "unidad_metodologia_prueba.id_unidad", "=", "corrida_analito.unidad_metodologia_prueba")
            ->join("unidad as unidad_metodologia_comparacion", "unidad_metodologia_comparacion.id_unidad", "=", "corrida_analito.unidad_metodologia_comparacion")
            ->join("laboratorio", "laboratorio.id_laboratorio", "=", "corrida_area.laboratorio_id_laboratorio")
            ->join("analizador as analizador_prueba", "analizador_prueba.id_analizador", "=", "corrida_analito.analizador_prueba")
            ->join("analizador as analizador_comparacion", "analizador_comparacion.id_analizador", "=", "corrida_analito.analizador_comparacion")
            ->where("corrida_analito.id_corrida_analito", $id_referencia)
            ->first();
    }
    

    public function edit(Request $req){
        
        $corridaAnalito = $this->tableCorridaAnalito
            ->where("id_corrida_analito",$req->id)
            ->first();

        switch($req->campo){
            case "analito":
                $analitos = AnalitoController::listByAreaCorrida($corridaAnalito->corrida_area_id_corrida_area);
                return view("corridaAnalito.corridaAnalitoEdit")
                ->with("corridaAnalito",$corridaAnalito)
                ->with("campo",$req->campo)
                ->with("analitos",$analitos);
                break;

            case "metodologia_prueba":
                $metodologias = MetodologiaController::listByAreaCorrida($corridaAnalito->corrida_area_id_corrida_area);
                return view("corridaAnalito.corridaAnalitoEdit")
                ->with("corridaAnalito",$corridaAnalito)
                ->with("campo",$req->campo)
                ->with("metodologias",$metodologias);
                break;


            case "analizador_prueba":
                $analizadores = AnalizadorController::listByAreaCorrida($corridaAnalito->corrida_area_id_corrida_area);
                return view("corridaAnalito.corridaAnalitoEdit")
                ->with("corridaAnalito",$corridaAnalito)
                ->with("campo",$req->campo)
                ->with("analizadores",$analizadores);
                break;

            case "modo_metodologia_prueba":
                $modos = ModoController::list();
                return view("corridaAnalito.corridaAnalitoEdit")
                ->with("corridaAnalito",$corridaAnalito)
                ->with("campo",$req->campo)
                ->with("modos",$modos);
                break;

            case "unidad_metodologia_prueba":
                $unidades = UnidadController::listByAreaCorrida($corridaAnalito->corrida_area_id_corrida_area);
                return view("corridaAnalito.corridaAnalitoEdit")
                ->with("corridaAnalito",$corridaAnalito)
                ->with("campo",$req->campo)
                ->with("unidades",$unidades);
                break;

            case "metodologia_comparacion":
                $metodologias = MetodologiaController::listByAreaCorrida($corridaAnalito->corrida_area_id_corrida_area);
                return view("corridaAnalito.corridaAnalitoEdit")
                ->with("corridaAnalito",$corridaAnalito)
                ->with("campo",$req->campo)
                ->with("metodologias",$metodologias);
                break;

            case "analizador_comparacion":
                $analizadores = AnalizadorController::listByAreaCorrida($corridaAnalito->corrida_area_id_corrida_area);
                return view("corridaAnalito.corridaAnalitoEdit")
                ->with("corridaAnalito",$corridaAnalito)
                ->with("campo",$req->campo)
                ->with("analizadores",$analizadores);
                break;

            case "modo_metodologia_comparacion":
                $modos = ModoController::list();
                return view("corridaAnalito.corridaAnalitoEdit")
                ->with("corridaAnalito",$corridaAnalito)
                ->with("campo",$req->campo)
                ->with("modos",$modos);
                break;

            case "unidad_metodologia_comparacion":
                $unidades = UnidadController::listByAreaCorrida($corridaAnalito->corrida_area_id_corrida_area);
                return view("corridaAnalito.corridaAnalitoEdit")
                ->with("corridaAnalito",$corridaAnalito)
                ->with("campo",$req->campo)
                ->with("unidades",$unidades);
                break;
               
            default:
                abort(500,"Opción de modificación no encontrada");
                break;
        }
    }
    
    
    public function destroy(Request $req){

        $this->historico = new CorridaAnalitoHistorico();
        $this->historico->store("destroy", $req);

        $this->tableCorridaAnalito
            ->where("id_corrida_analito",$req->id)
            ->delete();
    }
    
    
    public function status(Request $req){

        $this->historico = new CorridaAnalitoHistorico();
        $this->historico->store("status", $req);

        $statusNow = $this->tableCorridaAnalito
            ->where("id_corrida_analito",$req->id)
            ->first()
            ->estado; 

        $registroUpdate = $this->tableCorridaAnalito
            ->where("id_corrida_analito",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    public function show(Request $req){


        $corridaAnalito = self::listItem($req->id);
        
        return view("corridaAnalito.corridaAnalitoShow")
            ->with("corridaAnalito",$corridaAnalito)
            ->with("campo",$req->campo);
    }
    
    
    public function update(CorridaAnalitoRequest $req){

        $this->historico = new CorridaAnalitoHistorico();
        $this->historico->store("update", $req);

        $corridaAnalito = $this->tableCorridaAnalito
            ->where("id_corrida_analito",$req->id)
            ->first();

        switch($req->campo){
            case "id_analito":
                $corridaAnalito->update(["analito_id_analito" => $req->id_analito]);
                break;
            case "id_metodologia_prueba":
                $corridaAnalito->update(["metodologia_prueba" => $req->id_metodologia_prueba]);
                break;
            case "id_analizador_prueba":
                $corridaAnalito->update(["analizador_prueba" => $req->id_analizador_prueba]);
                break;
            case "id_modo_metodologia_prueba":
                $corridaAnalito->update(["modo_metodologia_prueba" => $req->id_modo_metodologia_prueba]);
                break;
            case "id_unidad_prueba":
                $corridaAnalito->update(["unidad_metodologia_prueba" => $req->id_unidad_prueba]);
                break;
            case "id_metodologia_comparacion":
                $corridaAnalito->update(["metodologia_comparacion" => $req->id_metodologia_comparacion]);
                break;
            case "id_analizador_comparacion":
                echo "(((Se va a actualizar el analitzado de comparacion";
                echo "$req->id_analizador_comparacion)))";
                $corridaAnalito->update(["analizador_comparacion" => $req->id_analizador_comparacion]);
                break;
            case "id_modo_metodologia_comparacion":
                $corridaAnalito->update(["modo_metodologia_comparacion" => $req->id_modo_metodologia_comparacion]);
                break;
            case "id_unidad_comparacion":
                $corridaAnalito->update(["unidad_metodologia_comparacion" => $req->id_unidad_comparacion]);
                break;

        }
    }
}