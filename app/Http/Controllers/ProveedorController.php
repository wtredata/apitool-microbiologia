<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Proveedor;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller{
    protected $tableProv;
    
    public function __construct(){
        $this->tableProv = new Proveedor();
    }
    
    
    public function section(){
        $proveedores = $this->tableProv
            ->orderBy("estado","desc")
            ->orderBy("nom_proveedor","asc")
            ->get();

        return view("proveedor.proveedorSection")
            ->with("proveedores",$proveedores)
            ->with("nomSection","SeeSectionProveedor");
    }
    
    
    public function index(){
        $proveedores = $this->tableProv
            ->orderBy("estado","desc")
            ->orderBy("nom_proveedor","asc")
            ->get();
        
        return view("proveedor.proveedorIndex")
            ->with("proveedores",$proveedores);
    }


    public function store(ProveedorRequest $req){
        $this->tableProv->nom_proveedor = $req->nombre;
        $this->tableProv->save();
    }

    
    public static function list(){
        $tableProv = new Proveedor();    
        return $tableProv
            ->where("estado",1)
            ->orderBy("nom_proveedor","asc")
            ->get();
    }
    
    
    public static function listAll(){
        $tableProv = new Proveedor();    
        return $tableProv
            ->orderBy("estado","desc")
            ->orderBy("nom_proveedor","asc")
            ->get();
    }
    
    public function listHTML(){
        $proveedores = $this->tableProv
            ->where("estado",1)
            ->orderBy("nom_proveedor","asc")
            ->get();
        
        return view("proveedor.proveedorList")
            ->with("proveedores",$proveedores);
    }
    
    
    public function destroy(Request $req){
        $this->tableProv
            ->where("id_proveedor",$req->id)
            ->delete();
    }

    
    public function status(Request $req){
        $statusNow = $this->tableProv
            ->where("id_proveedor",$req->id)
            ->first()
            ->estado;
            
        $registroUpdate = $this->tableProv
            ->where("id_proveedor",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){
        
        $proveedor = $this->tableProv
            ->where("id_proveedor",$req->id)
            ->first();
        
        return view("proveedor.proveedorEdit")
            ->with("proveedor",$proveedor)
            ->with("campo",$req->campo);
    }
    
    
    public function show(Request $req){
        $proveedor = $this->tableProv
            ->where("id_proveedor",$req->id)
            ->first();
        
        return view("proveedor.proveedorShow")
            ->with("proveedor",$proveedor)
            ->with("campo",$req->campo);
    }
    
    
    public function update(ProveedorRequest $req){
        $proveedor = $this->tableProv
            ->where("id_proveedor",$req->id)
            ->first();
            
        switch($req->campo){
            case "nombre":
                $proveedor->update(["nom_proveedor" => $req->nombre]);
                break;
        }
    }
}