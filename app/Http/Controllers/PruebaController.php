<?php

namespace App\Http\Controllers;

// Controladores

use App\CompraLote;
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Prueba;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\PruebaRequest;
use App\Laboratorio;
use App\Resource\CompraLote\Manager;
use App\Resource\EstadosPrueba\ListarEstados;
use App\Resource\Medicion\ListarTiposMediciones;
use App\Resource\MedicionPrueba\ListarTiposMedicionesPrueba;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;

class PruebaController extends Controller{
    protected $tablePrueba; 
    protected $array_get;
    
    public function __construct(){
        $this->tablePrueba = new Prueba();
        $this->array_get = array();
    }

    public static function listPruebas()
    {
      $prueba = new Prueba();
      return $prueba
        ->orderBy("prueba.nom_prueba", "asc")
        ->get();
    }
    public function section(){
        $pruebas = $this->tablePrueba
            ->orderBy("estado_id","desc")
            ->orderBy("nom_prueba","asc")
            ->get();
        
       return view("prueba.pruebaSection")
            ->with("pruebas",$pruebas)
            ->with("nomSection","SeeSectionPrueba");
    }
    public function index()
    {
        $pruebas = $this->tablePrueba
            ->orderBy("prueba.estado_id","desc")
            ->orderBy("prueba.nom_prueba","asc")
            ->get();
        
        return view("prueba.pruebaIndex")
            ->with("pruebas",$pruebas);
    }
    public function store(PruebaRequest $req){
        $this->tablePrueba->nom_prueba = $req->nombre;
        $this->tablePrueba->save();
    }
    public static function list(){
        $tablePrueba = new Prueba();    
        return $tablePrueba
            ->where("estado_id","desc")
            ->orderBy("nom_prueba","asc")
            ->get();
    }
    public static function listAll(){
        $tablePrueba = new Prueba();    
        return $tablePrueba
            ->orderBy("estado_id","desc")
            ->orderBy("nom_prueba","asc")
            ->get();;
    }    
    public function listHTML(){
        
        $pruebas = $this->tablePrueba
            ->where("estado_id",1)
            ->orderBy("nom_prueba","asc")
            ->get();
        
        return view("prueba.pruebaList")
            ->with("pruebas",$pruebas);
    }
    public function destroy(Request $req){
        $this->tablePrueba
            ->where("id_prueba",$req->id)
            ->delete();
    }    
    public function status(Request $req){
        $statusNow = $this->tablePrueba
            ->where("id_prueba",$req->id)
            ->first()
            ->estado_id;
        
        $registroUpdate = $this->tablePrueba
            ->where("id_prueba",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado_id" => 0]);
        } else {
            $registroUpdate->update(["estado_id" => 1]);
        }
    }
    public function edit(Request $req){
        
        $prueba = $this->tablePrueba
            ->where("id_prueba",$req->id)
            ->first();

        // dd($prueba);
        
        return view("prueba.pruebaEdit")
            ->with("prueba",$prueba)
            ->with("campo",$req->campo)
            ->with('estados',ListarEstados::listar());
    }
    public function show(Request $req){
        $prueba = $this->tablePrueba
            ->where("id_prueba",$req->id)
            ->first();
        
        return view("prueba.pruebaShow")
            ->with("prueba",$prueba)
            ->with("campo",$req->campo);
    }

    public function sectionAsignacion(Request $req)
    {
        $prueba = $this->tablePrueba
        ->where("id_prueba",$req->id)  
             ->first();

        $pruebas = DB::table('prueba_laboratorio')
                    ->select(["prueba.id_prueba", "prueba.nom_prueba", "prueba.estado_id"])
                    ->join('prueba', "prueba.id_prueba", "=", "prueba_laboratorio.id_prueba")
                    ->where("id_laboratorio", $req->id_reference)
                    ->get();
        
        $laboratorio = LaboratorioController::listItem($req->id_reference);
        
        return view("prueba.pruebaAsignacion")
            ->with("prueba", $prueba)
            ->with("pruebas", $pruebas)
            ->with("laboratorio", $laboratorio)
            ->with("campo",$req->campo);
    }
    public function cultivo(Request $req)
    {
        try {
            $laboratorio = Laboratorio::find($req->laboratorio);
            abort_if(!$laboratorio, 404);

            DB::table("prueba_laboratorio")
                ->insert([
                    'id_prueba' => $req->prueba,
                    'id_laboratorio' => $req->laboratorio
                ]);
            
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    public function update(PruebaRequest $req, $id){
        $prueba = $this->tablePrueba
            ->where("id_prueba", $id)
            ->first();

        $prueba->update(
            ["nom_prueba" => $req->nombre,
            //"estado_id"=>$req->estadoId
            ]
        );
        return redirect()->back();
    }
    public function GetPrueba(Request $req){
        $search = $req->busqueda;
        
        $resultQuery = DB::table('prueba')
            ->select(
                "prueba.id_prueba as id_prueba",
                "prueba.nom_prueba as nom_prueba"
            )
            ->whereRaw("prueba.nom_prueba LIKE '%$search%' AND prueba.estado_id = 1")
            ->orderBy("prueba.nom_prueba", "asc")
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
                    "id" => $rowQuery->id_prueba,
                    "text" => $rowQuery->nom_prueba
                ]
            );
        }

        return response($this->array_get, 200);
    }

    public function detalles($id){
        $lote = CompraLote::find($id);
        if (is_null($lote)) {
            return redirect()->back()->with('error', 'No se encontró el lote');
        }

        $lotesCepa = Manager::listarComprasLoteCepa();
        return view('microbiologia.pruebasSensibilidad.show')
        ->with('data',$lote)
        ->with('lotesCepa',$lotesCepa)
        ->with('hoy',Carbon::now())
        ->with('tiposMedicion',ListarTiposMedicionesPrueba::listadoMedicion());
    }
}























