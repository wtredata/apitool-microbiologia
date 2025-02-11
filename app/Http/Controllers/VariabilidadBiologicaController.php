<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\FuenteETMPController;
use App\Http\Controllers\AnalitoController;
use App\Http\Controllers\APSController;

// Modelos
use Illuminate\Support\Facades\DB;
use App\VariabilidadBiologica;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\VariabilidadBiologicaRequest;


class VariabilidadBiologicaController extends Controller{ 

    public function __construct(){
        $this->tableVariabilidadBiologica = new VariabilidadBiologica();
    }


    public static function listByAnalito($id_analito, $id_analito_lab){
        $tableVB = new VariabilidadBiologica();
        $obj_vb = $tableVB
            ->join("fuente_etmp","fuente_etmp.id_fuente_etmp", "=", "variabilidad_biologica.fuente_etmp_id_fuente_etmp")
            ->where([
                ["variabilidad_biologica.analito_id_analito", $id_analito],
                ["variabilidad_biologica.estado", 1],
            ])
            ->get();
        return APSController::procesarMultiplesAPS($obj_vb, $id_analito_lab, "id_analito_lab");
    }


    public function index(Request $req){
        $variabilidadesBiologicas = $this->tableVariabilidadBiologica
            ->select(
                "*",
                "variabilidad_biologica.estado as variabilidad_biologica_estado",
                DB::raw("ifnull(variabilidad_biologica.valor_limite, 'N/A') as valor_limite"),
                DB::raw("ifnull(variabilidad_biologica.sesgo_mp, 'N/A') as sesgo_mp"),
                DB::raw("ifnull(variabilidad_biologica.cv_mp, 'N/A') as cv_mp")
            )
            ->join("analito", "analito.id_analito", "=", "variabilidad_biologica.analito_id_analito")
            ->join("fuente_etmp", "fuente_etmp.id_fuente_etmp", "=", "variabilidad_biologica.fuente_etmp_id_fuente_etmp")
            ->orderBy("variabilidad_biologica.estado","desc")
            ->orderBy("fuente_etmp.nom_fuente_etmp","desc")
            ->where("analito_id_analito", $req->id)
            ->get();
        return view("variabilidadBiologica.variabilidadBiologicaIndex")
            ->with("variabilidadesBiologicas",$variabilidadesBiologicas);
    }


    public function show(Request $req){
        $variabilidad_biologica = self::listItem($req->id);
        return view("variabilidadBiologica.variabilidadBiologicaShow")
            ->with("variabilidadBiologica",$variabilidad_biologica)
            ->with("campo",$req->campo);
    }


    public static function listItem($id){
        $tableVariabilidadBiologica = new VariabilidadBiologica();    
        return $tableVariabilidadBiologica
            ->select(
                "*",
                "variabilidad_biologica.estado as variabilidad_biologica_estado",
                DB::raw("ifnull(variabilidad_biologica.valor_limite, 'N/A') as valor_limite"),
                DB::raw("ifnull(variabilidad_biologica.sesgo_mp, 'N/A') as sesgo_mp"),
                DB::raw("ifnull(variabilidad_biologica.cv_mp, 'N/A') as cv_mp")
            )
            ->join("analito", "analito.id_analito", "=", "variabilidad_biologica.analito_id_analito")
            ->join("fuente_etmp", "fuente_etmp.id_fuente_etmp", "=", "variabilidad_biologica.fuente_etmp_id_fuente_etmp")
            ->where("id_variabilidad_biologica", $id)
            ->first();
    }


    public function store(VariabilidadBiologicaRequest $req){
        $this->tableVariabilidadBiologica->analito_id_analito = $req->analito;
        $this->tableVariabilidadBiologica->fuente_etmp_id_fuente_etmp = $req->fuente_etmp;
        
        if($req->valor_limite == null){ // Si el valor APS NO esta definido
            $this->tableVariabilidadBiologica->sesgo_mp = $req->sesgo_mp;
            $this->tableVariabilidadBiologica->cv_mp = $req->cv_mp;
        } else { // Si el valor limite esta definido
            $this->tableVariabilidadBiologica->valor_limite = $req->valor_limite;
        }
        
        $this->tableVariabilidadBiologica->save();
    }


    public function destroy(Request $req){
        $this->tableVariabilidadBiologica
            ->where("id_variabilidad_biologica",$req->id)
            ->delete();
    }
    
    
    public function status(Request $req){
        $statusNow = $this->tableVariabilidadBiologica
            ->where("id_variabilidad_biologica",$req->id)
            ->first()
            ->estado;
            
        $registroUpdate = $this->tableVariabilidadBiologica
            ->where("id_variabilidad_biologica",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){

        $variabilidad_biologica = $this->tableVariabilidadBiologica
            ->where("id_variabilidad_biologica",$req->id)
            ->first();

        $fuentesETMP = FuenteETMPController::list();
        $analitos = AnalitoController::list();

        return view("variabilidadBiologica.variabilidadBiologicaEdit")
            ->with("fuentesETMP",$fuentesETMP)
            ->with("analitos",$analitos)
            ->with("variabilidad_biologica",$variabilidad_biologica)
            ->with("campo",$req->campo);
    }


    public function update(VariabilidadBiologicaRequest $req){
        $variabilidad_biologica = $this->tableVariabilidadBiologica
            ->where("id_variabilidad_biologica",$req->id)
            ->first();
            
        switch($req->campo){
            case "analito":
                $variabilidad_biologica->update(["analito_id_analito" => $req->analito]);
                break;
            case "fuente_etmp":
                $variabilidad_biologica->update(["fuente_etmp_id_fuente_etmp" => $req->fuente_etmp]);
                break; 
            case "valor_limite":
                $variabilidad_biologica->update(["valor_limite" => $req->valor_limite]);
                break; 
            case "sesgo_mp":
                $variabilidad_biologica->update(["sesgo_mp" => $req->sesgo_mp]);
                break; 
            case "cv_mp":
                $variabilidad_biologica->update(["cv_mp" => $req->cv_mp]);
                break;               
        }
    }
}