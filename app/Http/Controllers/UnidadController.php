<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CorridaAreaController;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Unidad;

// Request
use Illuminate\Http\Request;
use App\Http\Requests\UnidadRequest;

// Historicos
use App\Http\Historico\UnidadHistorico;

class UnidadController extends Controller {
    
    protected $tableUnidad;
    protected $historico;

    public function __construct(){
        $this->tableUnidad = new Unidad();
    }


    public static function listAll(){
        $tableUnidad = new Unidad();    
        return $tableUnidad
            ->orderBy("unidad.estado")
            ->orderBy("unidad.nom_unidad")
            ->get();
    }

    public static function list(){
        $tableUnidad = new Unidad();    
        return $tableUnidad
            ->orderBy("unidad.nom_unidad")
            ->where("unidad.estado",1)
            ->get();
    }


    public static function listItem($id_unidad){
        $tableUnidad = new Unidad();
        return $tableUnidad
            ->where("id_unidad",$id_unidad)
            ->first();
    }


    public static function listByAsignacionAnalito($id_analito){
        $tableUnidad = new Unidad();    
        return DB::select(
            "select 
                unidad_1.id_unidad,
                unidad_1.cod_unidad,
                unidad_1.nom_unidad,
                unidad_1.estado,
                (
                    select 1
                    from unidad_analito
                    where unidad_analito.unidad_id_unidad = unidad_1.id_unidad and unidad_analito.analito_id_analito = :id_analito
                    limit 1
                ) as asignado
            from unidad as unidad_1
            where unidad_1.estado = 1
            order by asignado desc",
            [
                "id_analito" => $id_analito,
            ]
        );
    }


    public function index(Request $req){
        $unidades = $this->tableUnidad
            ->select("*")
            ->orderBy("unidad.estado","desc")
            ->orderBy("unidad.nom_unidad","asc")
            ->get();
            
        return view("unidad.unidadIndex")
            ->with("unidades",$unidades);
    }


    public function store(UnidadRequest $req){
        $this->tableUnidad->nom_unidad = $req->nombre;
        $this->tableUnidad->cod_unidad = $req->codigo;
        $this->tableUnidad->save();
    }


    public function destroy(Request $req){
        $this->tableUnidad
            ->where("id_unidad",$req->id)
            ->delete();
    }


    public function status(Request $req){
        $statusNow = $this->tableUnidad
            ->where("id_unidad",$req->id)
            ->first()
            ->estado;
            
        $registroUpdate = $this->tableUnidad
            ->where("id_unidad",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }


    public function edit(Request $req){
        $unidad = $this->tableUnidad
            ->where("id_unidad",$req->id)
            ->first();

        return view("unidad.unidadEdit")
            ->with("unidad",$unidad)
            ->with("campo",$req->campo);
    }

    public function show(Request $req){
        $unidad = $this->tableUnidad
            ->select("*")
            ->where("unidad.id_unidad",$req->id)
            ->first();
        
        return view("unidad.unidadShow")
            ->with("unidad",$unidad)
            ->with("campo",$req->campo);
    }


    public function update(UnidadRequest $req){
        $unidad = $this->tableUnidad
            ->where("id_unidad",$req->id)
            ->first();
            
        switch($req->campo){
            case "nombre":
                $unidad->update(["nom_unidad" => $req->nombre]);
                break;
            case "codigo":
                $unidad->update(["cod_unidad" => $req->codigo]);
                break;
        }
    }


    public static function listByAnalitoEspecifico($id_analito){

        $tableUnidad = new Unidad();

        return $tableUnidad
            ->select(
                "unidad.id_unidad",
                "unidad.nom_unidad"
            )
            ->join("unidad_analito","unidad.id_unidad","=","unidad_analito.unidad_id_unidad")
            ->where([
                ["unidad.estado",1],
                ["unidad_analito.analito_id_analito","=", $id_analito],
            ])
            ->orderBy("unidad.nom_unidad")
            ->get();
    }


    public function listHTML(Request $req){ 
        $unidades = self::listByAnalitoEspecifico($req->id);
        return view("unidad.unidadList")
            ->with("unidades",$unidades);
    }
}