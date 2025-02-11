<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CorridaAreaController;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Metodologia;

// Request
use Illuminate\Http\Request;
use App\Http\Requests\MetodologiaRequest;

// Historicos
use App\Http\Historico\MetodologiaHistorico;

class MetodologiaController extends Controller{   
    protected $tableMetodologia;
    protected $historico;
    
    public function __construct(){
        $this->tableMetodologia = new Metodologia();
    }

    public static function listAll(){
        $tableMetodologia = new Metodologia();    
        return $tableMetodologia
            ->orderBy("metodo.estado")
            ->orderBy("metodo.nom_metodo")
            ->get();
    }

    public static function list(){
        $tableMetodologia = new Metodologia();    
        return $tableMetodologia
            ->orderBy("metodo.nom_metodo")
            ->where("metodo.estado",1)
            ->get();
    }


    public static function listItem($id_metodo){
        $tableMetodologia = new Metodologia();
        return $tableMetodologia
            ->where("id_metodo",$id_metodo)
            ->first();
    }


    public static function listByAsignacionAnalito($id_analito){
        $tableMetodologia = new Metodologia();    
        return DB::select(
            "select 
                metodo_1.id_metodo,
                metodo_1.cod_metodo,
                metodo_1.nom_metodo,
                metodo_1.estado,
                (
                    select 1
                    from metodo_analito
                    where metodo_analito.metodo_id_metodo = metodo_1.id_metodo and metodo_analito.analito_id_analito = :id_analito
                    limit 1
                ) as asignado
            from metodo as metodo_1
            where metodo_1.estado = 1
            order by asignado desc",
            [
                "id_analito" => $id_analito,
            ]
        );
    }

    public function index(Request $req){

        $metodologias = $this->tableMetodologia
            ->select("*")
            ->orderBy("metodo.estado","desc")
            ->orderBy("metodo.nom_metodo","asc")
            ->get();
            
        return view("metodologia.metodologiaIndex")
            ->with("metodologias",$metodologias);
    }


    public function store(MetodologiaRequest $req){
        $this->tableMetodologia->nom_metodo = $req->nombre;
        $this->tableMetodologia->cod_metodo = $req->codigo;
        $this->tableMetodologia->save();
    }
        
    public function destroy(Request $req){
        $this->tableMetodologia
            ->where("id_metodo",$req->id)
            ->delete();
    }

    public function status(Request $req){
        $statusNow = $this->tableMetodologia
            ->where("id_metodo",$req->id)
            ->first()
            ->estado;
            
        $registroUpdate = $this->tableMetodologia
            ->where("id_metodo",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }


    public function edit(Request $req){
        $metodologia = $this->tableMetodologia
            ->where("id_metodo",$req->id)
            ->first();

        return view("metodologia.metodologiaEdit")
            ->with("metodologia",$metodologia)
            ->with("campo",$req->campo);
    }


    public function show(Request $req){
        $metodologia = $this->tableMetodologia
            ->select("*")
            ->where("metodo.id_metodo",$req->id)
            ->first();
        
        return view("metodologia.metodologiaShow")
            ->with("metodologia",$metodologia)
            ->with("campo",$req->campo);
    }


    public function update(MetodologiaRequest $req){
        $metodologia = $this->tableMetodologia
            ->where("id_metodo",$req->id)
            ->first();
            
        switch($req->campo){
            case "nombre":
                $metodologia->update(["nom_metodo" => $req->nombre]);
                break;
            case "codigo":
                $metodologia->update(["cod_metodo" => $req->codigo]);
                break;             
        }
    }

    public static function listByAnalitoEspecifico($id_analito){

        $tableMetodologia = new Metodologia();

        return $tableMetodologia
            ->select(
                "metodo.id_metodo",
                "metodo.nom_metodo"
            )
            ->join("metodo_analito","metodo.id_metodo","=","metodo_analito.metodo_id_metodo")
            ->where([
                ["metodo.estado",1],
                ["metodo_analito.analito_id_analito","=", $id_analito],
            ])
            ->orderBy("metodo.nom_metodo")
            ->get();
    }


    public function listHTML(Request $req){ 
        
        $metodologias = self::listByAnalitoEspecifico($req->id);

        return view("metodologia.metodologiaList")
            ->with("metodologias",$metodologias);
    }
}