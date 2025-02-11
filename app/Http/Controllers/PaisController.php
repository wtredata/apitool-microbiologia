<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Pais;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\PaisRequest;

class PaisController extends Controller{
    protected $tablePais; 
    
    public function __construct(){
        $this->tablePais = new Pais();
    }
    
    
    public function section(){
        $paises = $this->tablePais
            ->orderBy("estado","desc")
            ->orderBy("nom_pais","asc")
            ->get();
        
       return view("pais.paisSection")
            ->with("paises",$paises)
            ->with("nomSection","SeeSectionPais");
    }
    
    
    public function index(){
        $paises = $this->tablePais
            ->orderBy("estado","desc")
            ->orderBy("nom_pais","asc")
            ->get();
        
        return view("pais.paisIndex")
            ->with("paises",$paises);
    }
    
    
    public function store(PaisRequest $req){
        $this->tablePais->nom_pais = $req->nombre;
        $this->tablePais->save();
    }
    
    
    public static function list(){
        $tablePais = new Pais();    
        return $tablePais
            ->where("estado",1)
            ->orderBy("nom_pais","asc")
            ->get();
    }

    public static function listAll(){
        $tablePais = new Pais();    
        return $tablePais
            ->orderBy("estado","desc")
            ->orderBy("nom_pais","asc")
            ->get();;
    }    
    
    public function listHTML(){
        
        $paises = $this->tablePais
            ->where("estado",1)
            ->orderBy("nom_pais","asc")
            ->get();
        
        return view("pais.paisList")
            ->with("paises",$paises);
    }
    
    
    public function destroy(Request $req){
        $this->tablePais
            ->where("id_pais",$req->id)
            ->delete();
    }
    
    
    public function status(Request $req){
        $statusNow = $this->tablePais
            ->where("id_pais",$req->id)
            ->first()
            ->estado; // Seleccionar el estado del Pais sea igual a la indicada 
        
        $registroUpdate = $this->tablePais
            ->where("id_pais",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){
        
        $pais = $this->tablePais
            ->where("id_pais",$req->id)
            ->first();
        
        return view("pais.paisEdit")
            ->with("pais",$pais)
            ->with("campo",$req->campo);
    }
    
    
    public function show(Request $req){
        $pais = $this->tablePais
            ->where("id_pais",$req->id)
            ->first();
        
        return view("pais.paisShow")
            ->with("pais",$pais)
            ->with("campo",$req->campo);
    }
    
    
    public function update(PaisRequest $req){
        $pais = $this->tablePais
            ->where("id_pais",$req->id)
            ->first(); // Se selecciona el pais mas cercano al actual a la cual se desea realizar la actualización

        switch($req->campo){
            case "nombre":
                $pais->update(["nom_pais" => $req->nombre]);
                break;
        }
    }
}























