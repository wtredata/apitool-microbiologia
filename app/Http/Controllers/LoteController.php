<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\ControlController;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Lote;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\LoteRequest;
class LoteController extends Controller
{

    protected $tableLote;
    protected $array_get;

    public function __construct()
    {
        $this->array_get = array();
        $this->tableLote = new Lote();
    }

    public function GetTopLotes(Request $req)
    {

        $search = $req->busqueda;

        $resultQuery = DB::table('lote')
            ->select(
                "lote.id_lote",
                "matriz.nom_matriz",
                "control.nom_control",
                "num_niveles",
                "lote.cod_lote",
                "lote.fecha_vencimiento",
                "lote.estado"
            )
            ->join("control", "control.id_control", "=", "lote.control_id_control")
            ->join("matriz", "matriz.id_matriz", "control.matriz_id_matriz")
            ->whereRaw("lote.estado = 1 and (lote.cod_lote like '%$search%' OR control.nom_control like '%$search%')")
            ->orderBy("lote.cod_lote", "asc")
            ->limit(40)
            ->get();

        return $this->returnJSONGetTopLotes($resultQuery);
    }

    private function returnJSONGetTopLotes($resultQuery)
    {
        foreach ($resultQuery as $rowQuery) {
            array_push(
                $this->array_get,
                [
                    "id" => $rowQuery->id_lote,
                    "text" => $rowQuery->cod_lote . " - " . $rowQuery->nom_control . " | Vence: " . $rowQuery->fecha_vencimiento . " | " . $rowQuery->nom_matriz,
                ]
            );
        }

        return response($this->array_get, 200);
    }


    public function index(Request $req){
        $lotes = $this->tableLote
        ->select(
            "lote.id_lote as id_lote",
            "control.nom_control as nom_control",
            "proveedor.nom_proveedor as nom_proveedor",
            "matriz.nom_matriz as nom_matriz",
            "lote.cod_lote as cod_lote",
            "lote.fecha_vencimiento as fecha_vencimiento",
            "lote.estado as estado"
        )
        ->join("control","control.id_control","=","lote.control_id_control")
        ->join("proveedor","proveedor.id_proveedor","=","control.proveedor_id_proveedor")
        ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
        ->orderBy("lote.estado","desc")
        ->orderBy("control.nom_control","asc")
        ->orderBy("lote.cod_lote","asc")
        ->where("control.id_control", $req->id)
        ->get();
    
    return view("lote.loteIndex")
        ->with("lotes",$lotes);
    }
    
    
    public function store(LoteRequest $req){
        $this->tableLote->control_id_control = $req->control;
        $this->tableLote->cod_lote = $req->numLote;
        $this->tableLote->fecha_vencimiento = $req->fecha;
        $this->tableLote->save();
    }
    
    
    public static function list(){
        $tableLote = new Lote();
        
        return $tableLote
        ->select(
            "lote.id_lote as id_lote",
            "control.nom_control as nom_control",
            "proveedor.nom_proveedor as nom_proveedor",
            "matriz.nom_matriz as nom_matriz",
            "lote.cod_lote as cod_lote",
            "lote.fecha_vencimiento as fecha_vencimiento",
            "lote.estado as estado"
        )
        ->join("control","control.id_control","=","lote.control_id_control")
        ->join("proveedor","proveedor.id_proveedor","=","control.proveedor_id_proveedor")
        ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
        ->orderBy("lote.estado","desc")
        ->orderBy("control.nom_control","asc")
        ->orderBy("lote.cod_lote","asc")
        ->where("lote.estado",1)
        ->get();
    }



    public static function listItem($id){
        $tableLote = new Lote();
        
        return $tableLote
        ->select(
            "*",
            "lote.estado as lote_estado"
        )
        ->join("control","control.id_control","=","lote.control_id_control")
        ->join("proveedor","proveedor.id_proveedor","=","control.proveedor_id_proveedor")
        ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
        ->where([
            ["lote.estado",1],
            ["lote.id_lote",$id]
        ])
        ->first();
    }


    public static function listByControl($id_control){

        $tableLote = new Lote();

        return $tableLote
        ->select(
            "lote.id_lote as id_lote",
            "lote.cod_lote as cod_lote",
            "lote.fecha_vencimiento as fecha_vencimiento",
            "lote.estado as estado",
            "control.nom_control as nom_control",
            "matriz.nom_matriz as nom_matriz"
        )
        ->join("control","control.id_control","=","lote.control_id_control")
        ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
        ->orderBy("lote.cod_lote","asc")
        ->orderBy("control.nom_control","asc")
        ->where([
            ["lote.estado",1],
            ["control.id_control",$id_control]
        ])
        ->get();
    }
        
        
    public function listHTML(){
        $lotes = $this->tableLote
        ->select(
            "lote.id_lote as id_lote",
            "control.nom_control as nom_control",
            "proveedor.nom_proveedor as nom_proveedor",
            "matriz.nom_matriz as nom_matriz",
            "lote.cod_lote as cod_lote",
            "lote.fecha_vencimiento as fecha_vencimiento",
            "lote.estado as estado"
            )
        ->join("control","control.id_control","=","lote.control_id_control")
        ->join("proveedor","proveedor.id_proveedor","=","control.proveedor_id_proveedor")
        ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
        ->orderBy("control.nom_control","asc")
        ->orderBy("lote.cod_lote","asc")
        ->where("lote.estado",1)
        ->get();
    
        return view("lote.loteList")
            ->with("lotes",$lotes);
    }
   
    
    public function destroy(Request $req){
        $this->tableLote
            ->where("id_lote",$req->id)
            ->delete();
    }
    
    
    public function status(Request $req){
        $statusNow = $this->tableLote
            ->where("id_lote",$req->id)
            ->first()
            ->estado; 
            
        $registroUpdate = $this->tableLote
            ->where("id_lote",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){
        $lote = $this->tableLote
            ->select(
                "lote.id_lote as id_lote",
                "control.nom_control as nom_control",
                "lote.control_id_control as control_id_control",
                "proveedor.nom_proveedor as nom_proveedor",
                "lote.cod_lote as cod_lote",
                "matriz.nom_matriz as nom_matriz",
                "lote.fecha_vencimiento as fecha_vencimiento",
                "lote.estado as estado"
            )
            ->join("control","control.id_control","=","lote.control_id_control")
            ->join("proveedor","proveedor.id_proveedor","=","control.proveedor_id_proveedor")
            ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
            ->where("id_lote",$req->id)
            ->first();

        $controles = ControlController::list();
        
        return view("lote.loteEdit")
            ->with("lote",$lote)
            ->with("campo",$req->campo)
            ->with("controles",$controles);
    }
    
    
    public function show(Request $req){
        $lote = $this->tableLote
            ->select(
                "lote.id_lote as id_lote",
                "control.nom_control as nom_control",
                "proveedor.nom_proveedor as nom_proveedor",
                "matriz.nom_matriz as nom_matriz",
                "lote.cod_lote as cod_lote",
                "lote.fecha_vencimiento as fecha_vencimiento",
                "lote.estado as estado"
            )
            ->join("control","control.id_control","=","lote.control_id_control")
            ->join("proveedor","proveedor.id_proveedor","=","control.proveedor_id_proveedor")
            ->join("matriz","matriz.id_matriz","=","control.matriz_id_matriz")
            ->where("lote.id_lote",$req->id)
            ->first();

        return view("lote.loteShow")
            ->with("lote",$lote)
            ->with("campo",$req->campo);
    }
    
    
    public function update(LoteRequest $req){
        $lote = $this->tableLote
            ->where("id_lote",$req->id)
            ->first();

        switch($req->campo){
            case "control":
                $lote->update(["control_id_control" => $req->control]);
                break;
                
            case "numLote":
                $lote->update(["cod_lote" => $req->numLote]);
                break;

            case "fecha":
                $lote->update(["fecha_vencimiento" => $req->fecha]);
                break;
        }
    }
}