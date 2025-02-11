<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\MedioController;
use App\Http\Controllers\PruebaController;

// Modelos
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Cepa;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\CepaRequest;
use App\Http\Requests\ControlCepaRequest;
use App\Resource\Cepa\Manager;
use App\Resource\Medicion\ListarTiposMediciones;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CepaController extends Controller
{
    protected $tableCepa;
    protected $array_get;
    public $manager;

    public function __construct()
    {
        $this->tableCepa = new Cepa();
        $this->array_get = array();
        $this->manager = new Manager();
    }


    public function section()
    {
        $cepas = $this->tableCepa
            ->orderBy("estado", "desc")
            ->orderBy("nom_cepa", "asc")
            ->get();

        return view("cepa.cepaSection")
            ->with("cepas", $cepas)
            ->with("nomSection", "SeeSectionCepa");
    }


    public function index()
    {
        $cepas = Cepa::orderBy("estado", "desc")
            ->orderBy("nom_cepa", "asc")
            ->get();

        return view("cepa.cepaIndex")
            ->with("cepa", $cepas);
    }

    public function store(CepaRequest $req)
    {
        $this->tableCepa->nom_cepa = $req->nombre;
        $this->tableCepa->num_lote = 0;
        $this->tableCepa->fecha = Carbon::now();
       return $this->tableCepa->save();
    }


    public static function list()
    {
        $tableCepa = new Cepa();
        return $tableCepa
            ->where("estado", 1)
            ->orderBy("nom_cepa", "asc")
            ->get();
    }

    public static function listAll()
    {
        $tableCepa = new Cepa();
        return $tableCepa
            ->orderBy("estado", "desc")
            ->orderBy("nom_cepa", "asc")
            ->get();;
    }

    public function listHTML()
    {

        $cepas = $this->tableCepa
            ->where("estado", 1)
            ->orderBy("nom_cepa", "asc")
            ->get();

        return view("cepa.cepaList")
            ->with("cepas", $cepas);
    }


    public function destroy(Request $req)
    {
        $this->tableCepa
            ->where("id_cepa", $req->id)
            ->delete();
    }


    public function status(Request $req)
    {
        $statusNow = $this->tableCepa
            ->where("id_cepa", $req->id)
            ->first()
            ->estado; // Seleccionar el estado del Pais sea igual a la indicada 

        $registroUpdate = $this->tableCepa
            ->where("id_cepa", $req->id);

        if ($statusNow == 1) {
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }


    public function edit($id)
    {

        $cepa = $this->tableCepa
            ->where("id_cepa", $id)
            ->with('comprasLote')
            ->first();
        return view("cepa.cepaEdit")
            ->with("cepa", $cepa);
        // ->with("campo",$req->campo);
    }


    public function show(Request $req)
    {
        $cepa = $this->tableCepa
            ->where("id_cepa", $req->id)
            ->first();

        return view("cepa.cepaShow")
            ->with("cepa", $cepa)
            ->with("campo", $req->campo);
    }


    public function update(CepaRequest $req)
    {
        $cepa = $this->tableCepa
            ->where("id_cepa", $req->id)
            ->first();

        $cepa->update(
            [
                "nom_cepa" => $req->nombre,
                "num_lote" => 0,
                "fecha" => Carbon::now(),
            ]
        );
        return redirect()->back();
    }

    public function GetCepa(Request $req)
    {
        $search = $req->busqueda;

        $resultQuery = DB::table('cepa')
            ->select(
                "cepa.id_cepa as id_cepa",
                "cepa.nom_cepa as nom_cepa"
            )
            ->whereRaw("cepa.nom_cepa LIKE '%$search%' AND cepa.estado = 1")
            ->orderBy("cepa.nom_cepa", "asc")
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
                    "id" => $rowQuery->id_cepa,
                    "text" => $rowQuery->nom_cepa
                ]
            );
        }

        return response($this->array_get, 200);
    }

    public function getInformacion(Request $req)
    {
        $cepa_laboratorio = DB::table("cepa_laboratorio AS cl")
            ->select("l.num_laboratorio", "l.nom_laboratorio", "cl.id_medio", "m.nom_medio", "cl.id_cepa", "c.nom_cepa", "c.num_lote", "c.fecha")
            ->join("laboratorio AS l", "l.id_laboratorio", "=", "cl.id_laboratorio")
            ->join("medio AS m", "m.id_medio", "=", "cl.id_medio")
            ->join("cepa AS c", "c.id_cepa", "=", "cl.id_cepa")
            ->where("id_cepa_laboratorio", $req->id_reference)
            ->first();
        $estructura_cepa = array(
            "laboratorio" => $cepa_laboratorio->num_laboratorio . " - " . $cepa_laboratorio->nom_laboratorio,
            "medio" => $cepa_laboratorio->id_medio . " - " . $cepa_laboratorio->nom_medio,
            "cepa" => $cepa_laboratorio->id_cepa . " - " . $cepa_laboratorio->nom_cepa,
            "lote" => $cepa_laboratorio->num_lote,
            "fecha" => $cepa_laboratorio->fecha
        );
        return response($estructura_cepa, 200);
    }
    public function asignarLoteCepaALoteMedio(Request $request)
    {

        $this->manager->asignarLoteCepa($request);
        return redirect()->back();
    }
    public function asignarLoteCepaALoteTincion(Request $request)
    {

        $this->manager->asignarLoteCepaTincion($request);
        return redirect()->back();
    }

    public function asignarLoteCepaALotePruebaSensi(Request $request)
    {

        $this->manager->asignarLoteCepaPrueba($request);
        return redirect()->back();
    }

    public function controlCepaMedio(Request $request)
    {

        if ($this->manager->registrarControlCepaMedio($request)) {
            return redirect()->back()->withErrors(['success' => 'Control registrado correctamente']);
        }

        return redirect()->back()->withErrors(['error' => 'Error al registrar el control']);
    }
    public function controlCepaTincion(Request $request)
    {

        if ($this->manager->registrarControlTincion($request)) {
            return redirect()->back()->withErrors(['success' => 'Control registrado correctamente']);
        }

        return redirect()->back()->withErrors(['error' => 'Error al registrar el control']);
    }

    public function controlCepaPrueba(Request $request)
    {

        if ($this->manager->registrarControlPrueba($request)) {
            return redirect()->back()->withErrors(['success' => 'Control registrado correctamente']);
        }

        return redirect()->back()->withErrors(['error' => 'Error al registrar el control']);
    }

    public function updateControlCepaMedio(ControlCepaRequest $request, $id)
    {
        try {
            Log::info('entra en el método updateControlCepa');
            // dd($request->all());
            $this->manager->updateControlMedio($request, $id);
            return redirect()->back();
        } catch (Exception $e) {
            throw new Exception('Error ocurrido al actualizar el registro de control');
        }
    }
    public function updateControlCepaTincion(ControlCepaRequest $request, $id)
    {
        try {
            Log::info('entra en el método updateControlCepaTincion');
            // dd($request->all());
            $this->manager->updateControlTincion($request, $id);
            return redirect()->back();
        } catch (Exception $e) {
            throw new Exception('Error ocurrido al actualizar el registro de control');
        }
    }

    public function updateControlCepaPrueba(ControlCepaRequest $request, $id)
    {
        try {
            Log::info('entra en el método updateControlCepaPrueba');
            $this->manager->updateControlPrueba($request, $id);
            return redirect()->back();
        } catch (Exception $e) {
            throw new Exception('Error ocurrido al actualizar el registro de control');
        }
    }

    public function destroyControlCepaMedio($id)
    {
        try {
            Log::info('entra en el método destroyControlCepa');
            $this->manager->destroyControlMedio($id);
            return redirect()->back();
        } catch (Exception $e) {
            throw new Exception('Error ocurrido al eliminar el registro de control');
        }
    }

    public function destroyControlCepaTincion($id)
    {
        try {
            Log::info('entra en el método destroyControlCepa');
            $this->manager->destroyControlTincion($id);
            return redirect()->back();
        } catch (Exception $e) {
            throw new Exception('Error ocurrido al eliminar el registro de control');
        }
    }
    public function destroyControlCepaPrueba($id)
    {
        try {
            Log::info('entra en el método destroyControlCepa');
            $this->manager->destroyControlPrueba($id);
            return redirect()->back();
        } catch (Exception $e) {
            throw new Exception('Error ocurrido al eliminar el registro de control');
        }
    }
}
