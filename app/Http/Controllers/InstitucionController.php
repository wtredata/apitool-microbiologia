<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Institucion;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\InstitucionRequest;

class InstitucionController extends Controller{
    protected $tableInst; // Table institucion
    
    public function __construct(){
        $this->tableInst = new Institucion();
    }
    
    
    public function section(){
        $instituciones = $this->tableInst
            ->orderBy("estado","desc")
            ->orderBy("nom_institucion","asc")
            ->get();

        
        return view("institucion.institucionSection")
            ->with("instituciones",$instituciones)
            ->with("nomSection","SeeSectionInstitucion");
    }
    
    
    public function index(){
        $instituciones = $this->tableInst
            ->orderBy("estado","desc")
            ->orderBy("nom_institucion","asc")
            ->get();
        
        return view("institucion.institucionIndex")
            ->with("instituciones",$instituciones);
    }


    public function store(InstitucionRequest $req){
        $this->tableInst->nom_institucion = $req->nombre;
        $this->tableInst->constante_z = $req->constante_z;
        $this->tableInst->save();
    }
    
    
    public static function list(){
        $tableInst = new Institucion();    
        return $tableInst
            ->where("estado",1)
            ->orderBy("nom_institucion","asc")
            ->get();
    }

    public static function listAll(){
        $tableInst = new Institucion();    
        return $tableInst
            ->orderBy("estado","desc")
            ->orderBy("nom_institucion","asc")
            ->get();
    }
    
    
    public function listHTML(){
        
        $instituciones = $this->tableInst
            ->where("estado",1)
            ->orderBy("nom_institucion","asc")
            ->get();
        
        return view("institucion.institucionList")
            ->with("instituciones",$instituciones);
    }
    
    
    public function destroy(Request $req){
        $this->tableInst
            ->where("id_institucion",$req->id)
            ->delete();
    }


    public function status(Request $req){
        $statusNow = $this->tableInst
            ->where("id_institucion",$req->id)
            ->first()
            ->estado; // Seleccionar el estado de la institucion que sea igual a la indicada 
        
        $registroUpdate = $this->tableInst
            ->where("id_institucion",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){
        
        $institucion = $this->tableInst
            ->where("id_institucion",$req->id)
            ->first();
        
        return view("institucion.institucionEdit")
            ->with("institucion",$institucion)
            ->with("campo",$req->campo);
    }
    
    
    public function show(Request $req){
        $institucion = $this->tableInst
            ->where("id_institucion",$req->id)
            ->first();
        
        return view("institucion.institucionShow")
            ->with("institucion",$institucion)
            ->with("campo",$req->campo);
    }
    
    
    public function update(InstitucionRequest $req){
        $institucion = $this->tableInst
            ->where("id_institucion",$req->id)
            ->first(); // Se selecciona la institucion a la cual se desea realizar la actualización

        switch($req->campo){
            case "nombre":
                $institucion->update(["nom_institucion" => $req->nombre]);
                break;
            case "constante_z":
                $institucion->update(["constante_z" => $req->constante_z]);
                break;
        }
    }
}























