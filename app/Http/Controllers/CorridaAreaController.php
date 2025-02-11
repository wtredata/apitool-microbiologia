<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AreaController;

// Modelos
use App\CorridaArea;

// Historicos
use App\Http\Historico\CorridaAreaHistorico;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\CorridaAreaRequest;

// Sesion
use Auth;

class CorridaAreaController extends Controller{

    protected $tableCorridaArea;
    protected $historico;

    public function __construct(){
        $this->tableCorridaArea = new CorridaArea();
    }


    public function section(Request $req){
        $corridasArea = self::list($req->id_laboratorio, $req->id_area);
        $laboratorios = LaboratorioController::listAll();
        $areas = AreaController::list();
        return view("corridaArea.corridaAreaSection")
            ->with("nomSection","SeeSectionCorridaArea")
            ->with("laboratorios",$laboratorios)
            ->with("areas",$areas)
            ->with("corridasArea",$corridasArea);
    }


    public function create(){
        $laboratorios = LaboratorioController::listAll();
        $areas = AreaController::list();
        return view("corridaArea.corridaAreaCreate")
            ->with("laboratorios",$laboratorios)
            ->with("areas",$areas);
    }


    public function index(Request $req){

        $corridasArea = self::list($req->id_laboratorio, $req->id_area);
        
        return view("corridaArea.corridaAreaIndex")
            ->with("corridasArea",$corridasArea);
    }


    public function store(CorridaAreaRequest $req){
        
        $this->historico = new CorridaAreaHistorico();
        $this->historico->store("store", $req);

        $this->tableCorridaArea->laboratorio_id_laboratorio = $req->id_laboratorio;
        $this->tableCorridaArea->area_id_area = $req->id_area;
        $this->tableCorridaArea->fecha_inicio = $req->fecha_inicio;
        $this->tableCorridaArea->save();
    }

    
    public static function list($laboratorio = "",$area = ""){

        if(Auth::user()->rol_id_rol == 1){ // Administrador total
            $tableCorridaArea = new CorridaArea();    
            $obj_bd = $tableCorridaArea
                ->select(
                    "area.*",
                    "laboratorio.*",
                    "corrida_area.id_corrida_area",
                    "corrida_area.fecha_inicio",
                    "corrida_area.estado as estado_corrida_area"
                )
                ->join("area", "area.id_area", "=", "corrida_area.area_id_area")
                ->join("laboratorio", "laboratorio.id_laboratorio", "=", "corrida_area.laboratorio_id_laboratorio")
                ->orderBy("corrida_area.estado","desc")
                ->orderBy("laboratorio.no_laboratorio","asc")
                ->orderBy("area.nom_area","asc");
    
            if($laboratorio != "" && $area != ""){ // Si tanto el area como el laboratorio estan definidos
                $obj_bd->where([
                    ["laboratorio.id_laboratorio","=",$laboratorio],
                    ["area.id_area","=",$area]
                ]);
            } else if($laboratorio != "") { // Si solo el laboratorio esta definido
                $obj_bd->where("laboratorio.id_laboratorio", $laboratorio);
            } else if($area != ""){ // Si solo el area esta definida
                $obj_bd->where("area.id_area", $area);
            }
            return $obj_bd->get();
        } else { // Cualquier otro tipo de usuario
            $tableCorridaArea = new CorridaArea();    
            $obj_bd = $tableCorridaArea
                ->select(
                    "area.*",
                    "laboratorio.*",
                    "corrida_area.id_corrida_area",
                    "corrida_area.fecha_inicio",
                    "corrida_area.estado as estado_corrida_area"
                )
                ->join("area", "area.id_area", "=", "corrida_area.area_id_area")
                ->join("laboratorio", "laboratorio.id_laboratorio", "=", "corrida_area.laboratorio_id_laboratorio")
                ->join("usuario_laboratorio", "laboratorio.id_laboratorio", "=", "usuario_laboratorio.laboratorio_id_laboratorio")
                ->orderBy("corrida_area.estado","desc")
                ->orderBy("laboratorio.no_laboratorio","asc")
                ->orderBy("area.nom_area","asc");
    
            if($laboratorio != "" && $area != ""){ // Si tanto el area como el laboratorio estan definidos
                $obj_bd->where([
                    ["laboratorio.id_laboratorio","=",$laboratorio],
                    ["area.id_area","=",$area],
                    ["usuario_laboratorio.usuario_id_usuario", "=", Auth::user()->id_usuario]
                    ]);
            } else if($laboratorio != "") { // Si solo el laboratorio esta definido
                $obj_bd->where([
                    ["laboratorio.id_laboratorio", $laboratorio],
                    ["usuario_laboratorio.usuario_id_usuario", "=", Auth::user()->id_usuario]
                ]);
            } else if($area != ""){ // Si solo el area esta definida
                $obj_bd->where([
                    ["area.id_area", $area],
                    ["usuario_laboratorio.usuario_id_usuario", "=", Auth::user()->id_usuario]
                ]);
            } else {
                $obj_bd->where([
                    ["usuario_laboratorio.usuario_id_usuario", "=", Auth::user()->id_usuario]
                ]);
            }

            return $obj_bd->get();
        }
    }

    public static function listItem($id_corrida_area){
        $tableCorridaArea = new CorridaArea();
        return $tableCorridaArea
            ->select(
                "laboratorio.*",
                "area.*",
                "corrida_area.id_corrida_area",
                "corrida_area.laboratorio_id_laboratorio",
                "corrida_area.area_id_area",
                "corrida_area.fecha_inicio",
                "corrida_area.estado as estado_corrida_area",
                )
            ->join("laboratorio","laboratorio.id_laboratorio","=","corrida_area.laboratorio_id_laboratorio")
            ->join("area","area.id_area","=","corrida_area.area_id_area")
            ->where("id_corrida_area", "=", $id_corrida_area)
            ->first();
    }


    public static function listAll(){
        
        $tableCorridaArea = new CorridaArea();

        if(Auth::user()->rol_id_rol == 1){ // para administrador total
            return $tableCorridaArea
            ->select(
                "area.*",
                "laboratorio.*",
                "corrida_area.id_corrida_area",
                "corrida_area.fecha_inicio",
                "corrida_area.estado as estado_corrida_area",
            )
            ->join("area", "area.id_area", "=", "corrida_area.area_id_area")
            ->join("laboratorio", "laboratorio.id_laboratorio", "=", "corrida_area.laboratorio_id_laboratorio")
            ->orderBy("corrida_area.id_corrida_area","asc")
            ->get();
        } else { // Si es otro usuario
            // Solo pueda ver los que tiene asignados
            $id_usuario = Auth::user()->id_usuario;
            return $tableCorridaArea
                ->select(
                    "area.*",
                    "laboratorio.*",
                    "corrida_area.id_corrida_area",
                    "corrida_area.fecha_inicio",
                    "corrida_area.estado as estado_corrida_area",
                )
                ->join("area", "area.id_area", "=", "corrida_area.area_id_area")
                ->join("laboratorio", "laboratorio.id_laboratorio", "=", "corrida_area.laboratorio_id_laboratorio")
                ->orderBy("corrida_area.id_corrida_area","asc")
                ->where(function($query) use($id_usuario){
                    $id_labs = UsuarioController::listLaboratorios($id_usuario, "array", "id_laboratorio");
                    return $query->whereIn("laboratorio.id_laboratorio",$id_labs);
                })
                ->get();
        }

    }


    public function edit(Request $req){

        $corridaArea = self::ListItem($req->id_reference);
        $laboratorios = LaboratorioController::listAll();
        $areas = AreaController::list();

        return view("corridaArea.corridaAreaEdit")
            ->with("laboratorios",$laboratorios)
            ->with("areas",$areas)
            ->with("corridaArea",$corridaArea);
    }
    

    public function listHTML(){
        
        $corridasArea = Self::listAll();

        return view("corridaArea.corridaAreaList")
            ->with("corridasArea",$corridasArea);
    }


    public static function getAreaById($id_corrida){ // Obtener el area de una corrida
        
        $tableCorridaArea = new CorridaArea();
        return $tableCorridaArea
            ->where("id_corrida_area",$id_corrida)
            ->first()["area_id_area"];
    }
    
    
    public function destroy(Request $req){

        $this->historico = new CorridaAreaHistorico();
        $this->historico->store("destroy", $req);

        $this->tableCorridaArea
            ->where("id_corrida_area",$req->id)
            ->delete();
    }
    
    
    public function status(Request $req){
        
        $this->historico = new CorridaAreaHistorico();
        $this->historico->store("status", $req);

        $statusNow = $this->tableCorridaArea
            ->where("id_corrida_area",$req->id)
            ->first()
            ->estado; 

        $registroUpdate = $this->tableCorridaArea
            ->where("id_corrida_area",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function show(Request $req){
        $area = $this->tableArea
            ->where("id_area",$req->id)
            ->first();
        
        return view("area.areaShow")
            ->with("area",$area)
            ->with("campo",$req->campo);
    }
    
    
    public function update(CorridaAreaRequest $req){

        $this->historico = new CorridaAreaHistorico();
        $this->historico->store("update", $req);

        $corridaArea = $this->tableCorridaArea
            ->where("id_corrida_area",$req->id)
            ->first();

        $corridaArea->update([
            "laboratorio_id_laboratorio" => $req->id_laboratorio,
            "area_id_area" => $req->id_area,
            "fecha_inicio" => $req->fecha_inicio
        ]);
    }
}