<?php

namespace App\Http\Controllers;


// Modelos
use Illuminate\Support\Facades\DB;
use App\Reactivo;

// Request
use Illuminate\Http\Request;
use App\Http\Requests\ReactivoRequest;

class ReactivoController extends Controller{   
    
    protected $tableReactivo;
    protected $array_get;
    
    public function __construct(){
        $this->tableReactivo = new Reactivo();
        $this->array_get = array();
    }


    public static function listAll(){
        $tableReactivo = new Reactivo();    
        return $tableReactivo
            ->orderBy("reactivo.estado")
            ->orderBy("reactivo.nom_reactivo")
            ->get();
    }


    public static function listItem($id_reactivo){
        $tableReactivo = new Reactivo();
        return $tableReactivo
            ->where("id_reactivo",$id_reactivo)
            ->first();
    }


    public function index(Request $req){
        $reactivos = $this->tableReactivo
            ->select("*")
            ->orderBy("reactivo.estado","desc")
            ->orderBy("reactivo.nom_reactivo","asc")
            ->get();
            
        return view("reactivo.reactivoIndex")
            ->with("reactivos",$reactivos);
    }


    public function store(ReactivoRequest $req){
        $this->tableReactivo->nom_reactivo = $req->nombre;
        $this->tableReactivo->cod_reactivo = $req->codigo;
        $this->tableReactivo->save();
    }


    public function destroy(Request $req){
        $this->tableReactivo
            ->where("id_reactivo",$req->id)
            ->delete();
    }


    public function status(Request $req){
        $statusNow = $this->tableReactivo
            ->where("id_reactivo",$req->id)
            ->first()
            ->estado;
            
        $registroUpdate = $this->tableReactivo
            ->where("id_reactivo",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }


    public function edit(Request $req){
        $reactivo = $this->tableReactivo
            ->where("id_reactivo",$req->id)
            ->first();

        return view("reactivo.reactivoEdit")
            ->with("reactivo",$reactivo)
            ->with("campo",$req->campo);
    }


    public function show(Request $req){
        $reactivo = $this->tableReactivo
            ->select("*")
            ->where("reactivo.id_reactivo",$req->id)
            ->first();
        
        return view("reactivo.reactivoShow")
            ->with("reactivo",$reactivo)
            ->with("campo",$req->campo);
    }


    public function update(ReactivoRequest $req){
        $reactivo = $this->tableReactivo
            ->where("id_reactivo",$req->id)
            ->first();
            
        switch($req->campo){
            case "nombre":
                $reactivo->update(["nom_reactivo" => $req->nombre]);
                break;
            case "codigo":
                $reactivo->update(["cod_reactivo" => $req->codigo]);
                break;
        }
    }


    public function GetTopReactivos(Request $req){
        $search = $req->busqueda;
        
        $resultQuery = DB::table('reactivo')
            ->select(
                "reactivo.id_reactivo as id_reactivo",
                "reactivo.nom_reactivo as nom_reactivo"
            )
            ->whereRaw("reactivo.nom_reactivo like '%$search%' and reactivo.estado = 1")
            ->orderBy("reactivo.nom_reactivo", "asc")
            ->limit(40)
            ->get();

        return $this->returnJSONGetTopByControlLaboratorio($resultQuery);
    }


    private function returnJSONGetTopByControlLaboratorio($resultQuery)
    {
        foreach ($resultQuery as $rowQuery) {
            array_push(
                $this->array_get,
                [
                    "id" => $rowQuery->id_reactivo,
                    "text" => $rowQuery->nom_reactivo
                ]
            );
        }

        return response($this->array_get, 200);
    }
}