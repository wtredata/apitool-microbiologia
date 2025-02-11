<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Modelos
use App\Modo;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\ModoRequest;

// Historicos
use App\Http\Historico\ModoHistorico;

class ModoController extends Controller{
    
    protected $tableModo;
    protected $historico;
    
    public function __construct(){
        $this->tableModo = new Modo();
    }
    
    
    public function section(){
        $modos = $this->tableModo
            ->orderBy("estado","desc")
            ->orderBy("nom_modo","asc")
            ->get();
        
       return view("modo.modoSection")
            ->with("modos",$modos)
            ->with("nomSection","SeeSectionModo");
    }
    
    
    public function index(){
        $modos = $this->tableModo
            ->orderBy("estado","desc")
            ->orderBy("nom_modo","asc")
            ->get();
        
        return view("modo.modoIndex")
            ->with("modos",$modos);
    }
    
    
    public function store(ModoRequest $req){
        $this->historico = new ModoHistorico();
        $this->historico->store("store", $req);

        $this->tableModo->nom_modo = $req->nombre;
        $this->tableModo->save();
    }
    
    
    public static function list(){
        $tableModo = new Modo();    
        return $tableModo
            ->where("estado",1)
            ->orderBy("nom_modo","asc")
            ->get();
    }

    public static function listItem($id_modo){
        $tableModo = new Modo();    
        return $tableModo
            ->where("id_modo",$id_modo)
            ->first();
    }


    public function listHTML(){
        
        $modos = $this->tableModo
            ->where("estado",1)
            ->orderBy("nom_modo","asc")
            ->get();
        
        return view("modo.modoList")
            ->with("modos",$modos);
    }
    
    
    public function destroy(Request $req){
        $this->historico = new ModoHistorico();
        $this->historico->store("destroy", $req);

        $this->tableModo
            ->where("id_modo",$req->id)
            ->delete();
    }
    
    
    public function status(Request $req){
        $this->historico = new ModoHistorico();
        $this->historico->store("status", $req);

        $statusNow = $this->tableModo
            ->where("id_modo",$req->id)
            ->first()
            ->estado; 

        $registroUpdate = $this->tableModo
            ->where("id_modo",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){
        
        $modo = $this->tableModo
            ->where("id_modo",$req->id)
            ->first();
        
        return view("modo.modoEdit")
            ->with("modo",$modo)
            ->with("campo",$req->campo);
    }
    
    
    public function show(Request $req){
        $modo = $this->tableModo
            ->where("id_modo",$req->id)
            ->first();
        
        return view("modo.modoShow")
            ->with("modo",$modo)
            ->with("campo",$req->campo);
    }
    
    
    public function update(ModoRequest $req){

        $this->historico = new ModoHistorico();
        $this->historico->store("update", $req);

        $modo = $this->tableModo
            ->where("id_modo",$req->id)
            ->first();

        switch($req->campo){
            case "nombre":
                $modo->update(["nom_modo" => $req->nombre]);
                break;
        }
    }
}