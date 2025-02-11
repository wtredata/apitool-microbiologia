<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MatrizController;
    
// Modelos
use Illuminate\Support\Facades\DB;
use App\Control;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\ControlRequest;


class ControlController extends Controller{   
    protected $tableCont;
    
    public function __construct(){
        $this->tableCont = new Control();
    }

    
    public function index(Request $req){
        $controles = $this->tableCont
            ->select(
                "control.id_control as id_control",
                "matriz.nom_matriz as nom_matriz",
                "control.nom_control as nom_control",
                "proveedor.nom_proveedor",
                "control.num_niveles as num_niveles",
                "control.estado as estado"
            )
            ->join('matriz', 'matriz.id_matriz', '=', 'control.matriz_id_matriz')
            ->join('proveedor', 'proveedor.id_proveedor', '=', "control.proveedor_id_proveedor")
            ->orderBy("control.estado","desc")
            ->orderBy("control.nom_control","asc")
            ->where("proveedor_id_proveedor",$req->id)
            ->get();

       return view("control.controlIndex")
            ->with("controles",$controles);
    }
    
    
    public function store(ControlRequest $req){
        $this->tableCont->proveedor_id_proveedor = $req->proveedor;
        $this->tableCont->matriz_id_matriz = $req->matriz;
        $this->tableCont->nom_control = $req->nombre;
        $this->tableCont->num_niveles = $req->numNiveles;
        $this->tableCont->save();
    }


    public function destroy(Request $req){
        $this->tableCont
            ->where("id_control",$req->id)
            ->delete();
    }


    public function status(Request $req){
        $statusNow = $this->tableCont
            ->where("id_control",$req->id)
            ->first()
            ->estado; // Seleccionar el estado de la institucion que sea igual a la indicada 
        
        $registroUpdate = $this->tableCont
            ->where("id_control",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }


    public static function listItem($id){
        $tableCont = new Control();
        return $tableCont
            ->where("id_control", $id)
            ->first();
    }


    public function edit(Request $req){
        
        $control = $this->tableCont
            ->where("id_control",$req->id)
            ->first();
        
        switch($req->campo){
            case "proveedor":
                $proveedores = ProveedorController::list();
                return view("control.controlEdit")
                ->with("proveedores",$proveedores)
                ->with("campo",$req->campo)
                ->with("control",$control);
                break;
                
            case "matriz":
                $matrices = MatrizController::list();
                return view("control.controlEdit")
                ->with("matrices",$matrices)
                ->with("campo",$req->campo)
                ->with("control",$control);
                break;
                
            case "nombre":
                return view("control.controlEdit")
                ->with("campo",$req->campo)
                ->with("control",$control);
                break;
                
            case "numNiveles":
                return view("control.controlEdit")
                ->with("campo",$req->campo)
                ->with("control",$control);
                
                break;
                
            default:
                abort(500,"Opción de modificación no encontrada");
                break;
        }
    }
    


    public function update(ControlRequest $req){
        $control = $this->tableCont
            ->where("id_control",$req->id)
            ->first(); 
            
        switch($req->campo){
            case "proveedor":
                $control->update(["proveedor_id_proveedor" => $req->proveedor]);
                break;
                
            case "matriz":
                $control->update(["matriz_id_matriz" => $req->matriz]);
                break;
                
            case "nombre":
                $control->update(["nom_control" => $req->nombre]);
                break;
                
            case "numNiveles":
                $control->update(["num_niveles" => $req->numNiveles]);
                break;
                
            default:
                abort(500,"Opción de modificación no encontrada");
                break;
        }
    }


    public function show(Request $req){
        $control = $this->tableCont
            ->select(
                "matriz.nom_matriz as nom_matriz",
                "control.nom_control as nom_control",
                "proveedor.nom_proveedor",
                "control.num_niveles as num_niveles"
            )
            ->join('matriz', 'matriz.id_matriz', '=', 'control.matriz_id_matriz')
            ->join('proveedor', 'proveedor.id_proveedor', '=', "control.proveedor_id_proveedor")
            ->where("id_control",$req->id)
            ->first();
        
        return view("control.controlShow")
            ->with("control",$control)
            ->with("campo",$req->campo);
    } 
    
    
    public static function list(){
        $tableCont = new Control();  
        return $tableCont
            ->select(
                "control.id_control as id_control",
                "control.nom_control as nom_control",
                "matriz.nom_matriz as nom_matriz",
                "proveedor.nom_proveedor as nom_proveedor"
            )
            ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
            ->join("proveedor","proveedor.id_proveedor","=","control.proveedor_id_proveedor")
            ->where("control.estado",1)
            ->orderBy("control.nom_control","asc")
            ->get();
    }


    public static function listAll(){
        $tableCont = new Control();  
        return $tableCont
            ->select(
                "control.id_control as id_control",
                "matriz.nom_matriz as nom_matriz",
                "control.nom_control as nom_control",
                "proveedor.nom_proveedor",
                "control.num_niveles as num_niveles",
                "control.estado as estado"
            )
            ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
            ->join("proveedor","proveedor.id_proveedor","=","control.proveedor_id_proveedor")
            ->orderBy("control.nom_control","asc")
            ->get();
    }
    
    
    public function listHTML(){        
        $controles = $this->tableCont
            ->select(
                "control.id_control as id_control",
                "control.nom_control as nom_control",
                "matriz.nom_matriz as nom_matriz",
                "proveedor.nom_proveedor as nom_proveedor"
            )
            ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
            ->join("proveedor","proveedor.id_proveedor","=","control.proveedor_id_proveedor")
            ->where("control.estado",1)
            ->orderBy("control.nom_control","asc")
            ->get();

        return view("control.controlList")
            ->with("controles",$controles);
    }

}