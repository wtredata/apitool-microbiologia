<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\FuenteETMP;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\FuenteETMPRequest;

class FuenteETMPController extends Controller{
    protected $tableProv;
    
    public function __construct(){
        $this->tableProv = new FuenteETMP();
    }
    
    
    public function section(){
        $fuentesETMP = $this->tableProv
            ->orderBy("estado","desc")
            ->orderBy("nom_fuente_etmp","asc")
            ->get();

        return view("fuenteETMP.fuenteETMPSection")
            ->with("fuentesETMP",$fuentesETMP)
            ->with("nomSection","SeeSectionFuenteETMP");
    }
    
    
    public function index(){
        $fuentesETMP = $this->tableProv
            ->orderBy("estado","desc")
            ->orderBy("nom_fuente_etmp","asc")
            ->get();
        
        return view("fuenteETMP.fuenteETMPIndex")
            ->with("fuentesETMP",$fuentesETMP);
    }


    public function store(FuenteETMPRequest $req){
        $this->tableProv->nom_fuente_etmp = $req->nombre;
        $this->tableProv->save();
    }

    
    public static function list(){
        $tableProv = new FuenteETMP();    
        return $tableProv
            ->where("estado",1)
            ->orderBy("nom_fuente_etmp","asc")
            ->get();
    }
    
    
    public static function listAll(){
        $tableProv = new FuenteETMP();    
        return $tableProv
            ->orderBy("estado","desc")
            ->orderBy("nom_fuente_etmp","asc")
            ->get();
    }
    
    public function listHTML(){
        $fuentesETMP = $this->tableProv
            ->where("estado",1)
            ->orderBy("nom_fuente_etmp","asc")
            ->get();
        
        return view("fuenteETMP.fuenteETMPList")
            ->with("fuentesETMP",$fuentesETMP);
    }
    
    
    public function destroy(Request $req){
        $this->tableProv
            ->where("id_fuente_etmp",$req->id)
            ->delete();
    }

    
    public function status(Request $req){
        $statusNow = $this->tableProv
            ->where("id_fuente_etmp",$req->id)
            ->first()
            ->estado;
            
        $registroUpdate = $this->tableProv
            ->where("id_fuente_etmp",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){
        
        $fuente_etmp = $this->tableProv
            ->where("id_fuente_etmp",$req->id)
            ->first();
        
        return view("fuenteETMP.fuenteETMPEdit")
            ->with("fuente_etmp",$fuente_etmp)
            ->with("campo",$req->campo);
    }
    
    
    public function show(Request $req){
        $fuente_etmp = $this->tableProv
            ->where("id_fuente_etmp",$req->id)
            ->first();
        
        return view("fuenteETMP.fuenteETMPShow")
            ->with("fuente_etmp",$fuente_etmp)
            ->with("campo",$req->campo);
    }
    
    
    public function update(FuenteETMPRequest $req){
        $fuente_etmp = $this->tableProv
            ->where("id_fuente_etmp",$req->id)
            ->first();
            
        switch($req->campo){
            case "nombre":
                $fuente_etmp->update(["nom_fuente_etmp" => $req->nombre]);
                break;
        }
    }
}