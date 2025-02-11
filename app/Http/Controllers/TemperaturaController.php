<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
// use App\Http\Controllers\AreaController;
// use App\Http\Controllers\CorridaAreaController;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Temperatura;

// Request
use Illuminate\Http\Request;
use App\Http\Requests\TemperaturaRequest;


class TemperaturaController extends Controller{   
    
    protected $tableTemperatura;
    
    public function __construct(){
        $this->tableTemperatura = new Temperatura();
    }

    public static function listAll(){
        $tableTemperatura = new Temperatura();    
        return $tableTemperatura
            ->orderBy("temperatura.estado")
            ->orderBy("temperatura.nom_temperatura")
            ->get();
    }


    public static function list(){
        $tableTemperatura = new Temperatura();    
        return $tableTemperatura
            ->orderBy("temperatura.nom_temperatura")
            ->where("temperatura.estado",1)
            ->get();
    }

    public static function listItem($id_temperatura){
        $tableTemperatura = new Temperatura();
        return $tableTemperatura
            ->where("id_temperatura",$id_temperatura)
            ->first();
    }


    public static function listByAsignacionAnalito($id_analito){
        return DB::select(
            "select 
                temperatura_1.id_temperatura,
                temperatura_1.cod_temperatura,
                temperatura_1.nom_temperatura,
                temperatura_1.estado,
                (
                    select 1
                    from temperatura_analito
                    where temperatura_analito.temperatura_id_temperatura = temperatura_1.id_temperatura and temperatura_analito.analito_id_analito = :id_analito
                    limit 1
                ) as asignado
            from temperatura as temperatura_1
            where temperatura_1.estado = 1
            order by asignado desc",
            [
                "id_analito" => $id_analito,
            ]
        );
    }

    public function index(Request $req){
        $temperaturas = $this->tableTemperatura
            ->select("*")
            ->orderBy("temperatura.estado","desc")
            ->orderBy("temperatura.nom_temperatura","asc")
            ->get();
            
        return view("temperatura.temperaturaIndex")
            ->with("temperaturas",$temperaturas);
    }


    public function store(TemperaturaRequest $req){
        $this->tableTemperatura->nom_temperatura = $req->nombre;
        $this->tableTemperatura->cod_temperatura = $req->codigo;
        $this->tableTemperatura->save();
    }


    public function destroy(Request $req){
        $this->tableTemperatura
            ->where("id_temperatura",$req->id)
            ->delete();
    }


    public function status(Request $req){
        $statusNow = $this->tableTemperatura
            ->where("id_temperatura",$req->id)
            ->first()
            ->estado;
            
        $registroUpdate = $this->tableTemperatura
            ->where("id_temperatura",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    

    public function edit(Request $req){
        $temperatura = $this->tableTemperatura
            ->where("id_temperatura",$req->id)
            ->first();

        return view("temperatura.temperaturaEdit")
            ->with("temperatura",$temperatura)
            ->with("campo",$req->campo);
    }


    public function show(Request $req){
        $temperatura = $this->tableTemperatura
            ->select("*")
            ->where("temperatura.id_temperatura",$req->id)
            ->first();
        
        return view("temperatura.temperaturaShow")
            ->with("temperatura",$temperatura)
            ->with("campo",$req->campo);
    }

    public function update(TemperaturaRequest $req){
        $temperatura = $this->tableTemperatura
            ->where("id_temperatura",$req->id)
            ->first();
            
        switch($req->campo){
            case "nombre":
                $temperatura->update(["nom_temperatura" => $req->nombre]);
                break;
            case "codigo":
                $temperatura->update(["cod_temperatura" => $req->codigo]);
                break;
        }
    }


    public static function listByAnalitoEspecifico($id_analito){

        $tableTemperatura = new Temperatura();

        return $tableTemperatura
            ->select(
                "temperatura.id_temperatura",
                "temperatura.nom_temperatura"
            )
            ->join("temperatura_analito","temperatura.id_temperatura","=","temperatura_analito.temperatura_id_temperatura")
            ->where([
                ["temperatura.estado",1],
                ["temperatura_analito.analito_id_analito","=", $id_analito],
            ])
            ->orderBy("temperatura.nom_temperatura")
            ->get();
    }


    public function listHTML(Request $req){ 
        $temperaturas = self::listByAnalitoEspecifico($req->id);
        return view("temperatura.temperaturaList")
            ->with("temperaturas",$temperaturas);
    }
}