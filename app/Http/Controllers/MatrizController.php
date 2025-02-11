<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Matriz;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\MatrizRequest;

class MatrizController extends Controller{
    protected $tableProv;
    
    public function __construct(){
        $this->tableProv = new Matriz();
    }
    
    
    public function section(){
        $matrices = $this->tableProv
            ->orderBy("estado","desc")
            ->orderBy("nom_matriz","asc")
            ->get();

        return view("matriz.matrizSection")
            ->with("matrices",$matrices)
            ->with("nomSection","SeeSectionMatriz");
    }
    
    
    public function index(){
        $matrices = $this->tableProv
            ->orderBy("estado","desc")
            ->orderBy("nom_matriz","asc")
            ->get();
        
        return view("matriz.matrizIndex")
            ->with("matrices",$matrices);
    }


    public function store(MatrizRequest $req){
        $this->tableProv->nom_matriz = $req->nombre;
        $this->tableProv->save();
    }

    
    public static function list(){
        $tableProv = new Matriz();    
        return $tableProv
            ->where("estado",1)
            ->orderBy("nom_matriz","asc")
            ->get();
    }
    
    
    public static function listAll(){
        $tableProv = new Matriz();    
        return $tableProv
            ->orderBy("estado","desc")
            ->orderBy("nom_matriz","asc")
            ->get();
    }
    
    public function listHTML(){
        $matrices = $this->tableProv
            ->where("estado",1)
            ->orderBy("nom_matriz","asc")
            ->get();
        
        return view("matriz.matrizList")
            ->with("matrices",$matrices);
    }
    
    
    public function destroy(Request $req){
        $this->tableProv
            ->where("id_matriz",$req->id)
            ->delete();
    }

    
    public function status(Request $req){
        $statusNow = $this->tableProv
            ->where("id_matriz",$req->id)
            ->first()
            ->estado;
            
        $registroUpdate = $this->tableProv
            ->where("id_matriz",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){
        
        $matriz = $this->tableProv
            ->where("id_matriz",$req->id)
            ->first();
        
        return view("matriz.matrizEdit")
            ->with("matriz",$matriz)
            ->with("campo",$req->campo);
    }
    
    
    public function show(Request $req){
        $matriz = $this->tableProv
            ->where("id_matriz",$req->id)
            ->first();
        
        return view("matriz.matrizShow")
            ->with("matriz",$matriz)
            ->with("campo",$req->campo);
    }
    
    
    public function update(MatrizRequest $req){
        $matriz = $this->tableProv
            ->where("id_matriz",$req->id)
            ->first();
            
        switch($req->campo){
            case "nombre":
                $matriz->update(["nom_matriz" => $req->nombre]);
                break;
        }
    }
}