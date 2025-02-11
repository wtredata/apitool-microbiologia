<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PaisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ciudad;
use App\Http\Requests\CiudadRequest;

class CiudadController extends Controller{   
    protected $tableCiud;
    
    public function __construct(){
        $this->tableCiud = new Ciudad();
    }


    public function section(){
        $ciudades = $this->tableCiud
            ->select(
                "pais.nom_pais as pais",
                "ciudad.id_ciudad as id_ciudad",
                "ciudad.nom_ciudad as nom_ciudad",
                "ciudad.estado as estado"
            )
            ->join("pais", "pais.id_pais", "=", "ciudad.pais_id_pais")
            ->orderBy("ciudad.estado","desc")
            ->orderBy("pais.nom_pais","asc")
            ->orderBy("ciudad.nom_ciudad","asc")
            ->get();
        
        $paises = PaisController::list();

        return view("ciudad.ciudadSection")
            ->with("ciudades",$ciudades)
            ->with("paises",$paises)
            ->with("nomSection","SeeSectionCiudad");
    }


    public function index(Request $req){
        $ciudades = $this->tableCiud
                ->select(
                    "pais.nom_pais as pais",
                    "ciudad.id_ciudad as id_ciudad",
                    "ciudad.nom_ciudad as nom_ciudad",
                    "ciudad.estado as estado"
                )
                ->join("pais", "pais.id_pais", "=", "ciudad.pais_id_pais")
                ->orderBy("ciudad.estado","desc")
                ->orderBy("pais.nom_pais","asc")
                ->orderBy("ciudad.nom_ciudad","asc")
                ->where("pais_id_pais", $req->id)
                ->get();
        return view("ciudad.ciudadIndex")
            ->with("ciudades",$ciudades);
    }
    
    
    public function store(CiudadRequest $req){
        $this->tableCiud->pais_id_pais = $req->pais;
        $this->tableCiud->nom_ciudad = $req->nombre;
        $this->tableCiud->save();
    }
    
    
    public static function list(){
        $tableCiud = new Ciudad();    
        return $tableCiud
            ->select(
                "ciudad.id_ciudad as id_ciudad",
                "pais.nom_pais as nom_pais",
                "ciudad.nom_ciudad as nom_ciudad"
            )
            ->join("pais","pais.id_pais","=","ciudad.pais_id_pais")
            ->where("ciudad.estado",1)
            ->orderBy("pais.nom_pais")
            ->orderBy("ciudad.nom_ciudad")
            ->get();
    }

  public static function listCiudadUsed(){
    $tableCiud = new Ciudad();
    return $tableCiud
      ->select(
        "ciudad.id_ciudad as id_ciudad",
        "pais.nom_pais as nom_pais",
        "ciudad.nom_ciudad as nom_ciudad"
      )
      ->join("pais","pais.id_pais","=","ciudad.pais_id_pais")
      ->join("sede","sede.ciudad_id_ciudad","=","ciudad.id_ciudad")
      ->where("ciudad.estado",1)
      ->orderBy("pais.nom_pais")
      ->orderBy("ciudad.nom_ciudad")
      ->distinct()
      ->get();
  }


    public static function listItem($id){
        $tableCiud = new Ciudad();    
        return $tableCiud
            ->select(
                "ciudad.id_ciudad as id_ciudad",
                "ciudad.nom_ciudad as nom_ciudad",
                "pais.id_pais as id_pais",
                "pais.nom_pais as nom_pais"
            )
            ->join("pais","pais.id_pais","=","ciudad.pais_id_pais")
            ->orderBy("pais.nom_pais")
            ->orderBy("ciudad.nom_ciudad")
            ->where([
                ["ciudad.id_ciudad",$id],
                ["ciudad.estado",1]
            ])
            ->first();
    }
    
    
    public function listHTML(){
        
        $ciudades = $this->tableCiud
            ->select(
                "ciudad.id_ciudad as id_ciudad",
                "pais.nom_pais as nom_pais",
                "ciudad.nom_ciudad as nom_ciudad"
            )
            ->join("pais","pais.id_pais","=","ciudad.pais_id_pais")
            ->where("ciudad.estado",1)
            ->orderBy("pais.nom_pais")
            ->orderBy("ciudad.nom_ciudad")
            ->get();
        
        return view("ciudad.ciudadList")
            ->with("ciudades",$ciudades);
    }
    
    
    public function destroy(Request $req){
        $this->tableCiud
            ->where("id_ciudad",$req->id)
            ->delete();
    }
    
    
    public function status(Request $req){
        $statusNow = $this->tableCiud
            ->where("id_ciudad",$req->id)
            ->first()
            ->estado;
            
        $registroUpdate = $this->tableCiud
            ->where("id_ciudad",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){

        $ciudad = $this->tableCiud
            ->where("id_ciudad",$req->id)
            ->first();

        $paises = PaisController::list();

        return view("ciudad.ciudadEdit")
            ->with("ciudad",$ciudad)
            ->with("paises",$paises)
            ->with("campo",$req->campo);
    }
    
    
    public function show(Request $req){
        $ciudad = $this->tableCiud
            ->select(
                "pais.nom_pais as pais",
                "ciudad.id_ciudad as id_ciudad",
                "ciudad.nom_ciudad as nom_ciudad",
            )
            ->join("pais","pais.id_pais","=","ciudad.pais_id_pais")
            ->where("id_ciudad",$req->id)
            ->first();
        
        return view("ciudad.ciudadShow")
            ->with("ciudad",$ciudad)
            ->with("campo",$req->campo);
    }
    
    
    public function update(CiudadRequest $req){
        $ciudad = $this->tableCiud
            ->where("id_ciudad",$req->id)
            ->first();
            
        switch($req->campo){
            case "pais":
                $ciudad->update(["pais_id_pais" => $req->pais]);
                break;
            case "nombre":
                $ciudad->update(["nom_ciudad" => $req->nombre]);
                break;               
        }
    }
}
