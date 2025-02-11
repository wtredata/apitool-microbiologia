<?php

namespace App\Http\Controllers;

// Controladores

use App\CompraLote;
use App\ControlCepaMedio;
use App\Http\Controllers\Controller;

// Modelos
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Medio;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\MedioRequest;
use App\Laboratorio;
use App\LoteLaboratorio;
use App\MedioLaboratorio;
use App\PruebaLoteMedio;
use App\Resource\Cepa\Manager as CepaManager;
use App\Resource\CompraLote\Manager as CompraLoteManager;
use App\Resource\LoteLaboratorio\Manager;
use App\Resource\Medicion\ListarTiposMediciones;
use App\SeguimientoCepaMedio;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MedioController extends Controller
{

    protected $tableMedio;
    protected $array_get;

    public function __construct()
    {
        $this->tableMedio = new Medio();
        $this->array_get = array();
    }

    public static function listMedios()
    {
        $medio = new Medio();
        return $medio
            ->orderBy("medio.nom_medio", "asc")
            ->get();
    }

    public function section()
    {
        $medios = $this->tableMedio
            ->orderBy("estado", "desc")
            ->orderBy("nom_medio", "asc")
            ->get();

        return view("medio.medioSection")
            ->with("medios", $medios)
            ->with("nomSection", "SeeSectionMedio");
    }


    public function index()
    {
        $medios = $this->tableMedio
            ->orderBy("medio.estado", "desc")
            ->orderBy("medio.nom_medio", "asc")
            ->get();

        return view("medio.medioIndex")
            ->with("medios", $medios);
    }
    public function store(MedioRequest $req)
    {
        $this->tableMedio->nom_medio = $req->nombre;
        $this->tableMedio->caracteristica = $req->caracteristica;

        $this->tableMedio->save();
    }
    public static function list()
    {
        $tableMedio = new Medio();
        return $tableMedio
            ->where("estado", 1)
            ->orderBy("nom_medio", "asc")
            ->get();
    }
    public static function listAll()
    {
        $tableMedio = new Medio();
        return $tableMedio
            ->orderBy("estado", "desc")
            ->orderBy("nom_medio", "asc")
            ->get();
        ;
    }
    public function listHTML()
    {

        $medios = $this->tableMedio
            ->where("estado", 1)
            ->orderBy("nom_medio", "asc")
            ->get();

        return view("medio.medioList")
            ->with("medios", $medios);
    }

    public function destroy(Request $req)
    {
        $this->tableMedio
            ->where("id_medio", $req->id)
            ->delete();
    }
    public function status(Request $req)
    {
        $statusNow = $this->tableMedio
            ->where("id_medio", $req->id)
            ->first()
            ->estado;

        $registroUpdate = $this->tableMedio
            ->where("id_medio", $req->id);

        if ($statusNow == 1) {
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    public function edit($id)
    {

        $medio = $this->tableMedio
            ->where("id_medio", $id)
            ->with('comprasLote')
            ->first();
        $medioLaboratorios = MedioLaboratorio::where('id_medio', $id)->with(['medio', 'laboratorio'])->get();
        $user = Auth::user()->nom_usuario;
        Log::info('usuario auth: ' . $user);

        return view("medio.medioEdit")
            ->with("medioLaboratorios", $medioLaboratorios)
            ->with("medio", $medio);
    }
    public function show(Request $req)
    {
        $medio = $this->tableMedio
            ->where("id_medio", $req->id)
            ->first();

        return view("medio.medioShow")
            ->with("medio", $medio)
            ->with("campo", $req->campo);
    }


    public function sectionAsignacion(Request $req)
    {
        $medio = $this->tableMedio
            ->where("id_medio", $req->id)
            ->first();

        $medios = DB::table('medio_laboratorio')
            ->select(["medio.id_medio", "medio.nom_medio", "medio.estado"])
            ->join('medio', "medio.id_medio", "=", "medio_laboratorio.id_medio")
            ->where("id_laboratorio", $req->id_reference)
            ->get();

        $laboratorio = LaboratorioController::listItem($req->id_reference);

        return view("medio.medioAsignacion")
            ->with("medio", $medio)
            ->with("medios", $medios)
            ->with("laboratorio", $laboratorio)
            ->with("campo", $req->campo);
    }

    public function sectionAsignacionCepa(Request $req)
    {
        $medio = $this->tableMedio
            ->where("id_medio", $req->id)
            ->first();

        $cepas = DB::table("cepa_laboratorio")
            ->select(["cepa.id_cepa", "cepa.nom_cepa", "cepa.num_lote", "cepa.fecha", "cepa.estado"])
            ->join("cepa", "cepa.id_cepa", "=", "cepa_laboratorio.id_cepa")
            ->where("cepa_laboratorio.id_medio", $req->id_reference)
            ->where("cepa_laboratorio.id_laboratorio", $req->nivel_analito)
            ->get();

        $laboratorio = LaboratorioController::listItem($req->nivel_analito);
        $medio = Medio::find($req->id_reference);

        return view("cepa.cepaAsignacion")
            ->with("cepas", $cepas)
            ->with("medio", $medio)
            ->with("laboratorio", $laboratorio);
    }

    public function update(MedioRequest $req)
    {
        $medio = $this->tableMedio
            ->where("id_medio", $req->id)
            ->first();
        $medio->update([
            'nom_medio' => $req->nombre,
            'caracteristica' => $req->caracteristica
        ]);
        return redirect()->back();
    }

    public function cultivo(Request $req)
    {
        try {
            $laboratorio = Laboratorio::find($req->laboratorio);
            abort_if(!$laboratorio, 404);

            DB::table("medio_laboratorio")
                ->insert([
                    'id_medio' => $req->medio,
                    'id_laboratorio' => $req->laboratorio
                ]);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function cepa(Request $req)
    {
        try {
            $laboratorio = Laboratorio::find($req->laboratorio);
            abort_if(!$laboratorio, 404);

            DB::table("cepa_laboratorio")
                ->insert([
                    'id_medio' => $req->medio,
                    'id_laboratorio' => $req->laboratorio,
                    'id_cepa' => $req->cepa,
                ]);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function GetMedioCultivo(Request $req)
    {
        $search = $req->busqueda;

        $resultQuery = DB::table('medio')
            ->select(
                "medio.id_medio as id_medio",
                "medio.nom_medio as nom_medio"
            )
            ->whereRaw("medio.nom_medio LIKE '%$search%' AND medio.estado = 1")
            ->orderBy("medio.nom_medio", "asc")
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
                    "id" => $rowQuery->id_medio,
                    "text" => $rowQuery->nom_medio
                ]
            );
        }

        return response($this->array_get, 200);
    }

    public function asignarloteLaboratorio(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'loteMedioId' => 'required|exists:compras_lotes,id',
                'laboratorioId' => 'required|exists:laboratorio,id_laboratorio',
            ]);

            DB::beginTransaction();
            LoteLaboratorio::create([
                'lote_id' => $validatedData['loteMedioId'],
                'id_laboratorio' => $validatedData['laboratorioId']
            ]);
            DB::commit();
            return redirect()->back();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error al intentar asignar el lote al laboratorio. ' . $e->getMessage());
            throw new Exception('Error al intentar asignar el lote al laboratorio');
        }
    }

    public function detalles($id,$labId)
    {
        //try {
        
        $lote = CompraLote::find($id);
        // Log::info($lote->comentariosLoteMedio);
        $esDiferente = false;
        foreach($lote->LoteCepaMedios as $cepas){
            $esDiferente = $cepas->loteLaboratorio->id_laboratorio == $labId ? $cepas->loteLaboratorio->id_laboratorio == $labId : false;
        }

        // dd($esDiferente);
        if (is_null($lote)) {
            return redirect()->back()->with('error', 'No se encontró el lote');
        }
        $lotesCepa = CompraLoteManager::listarComprasLoteCepa();

        return view('microbiologia.mediosDeCultivos.show')
            ->with('hoy', Carbon::now())
            ->with('data', $lote)
            ->with('lotesCepa', $lotesCepa)
            ->with('laboratorioId', $labId)
            ->with('esDiferente', $esDiferente)
            ->with("tiposMedicion", ListarTiposMediciones::listadoMedicionCrecimiento());

        /*} catch (Exception $e) {
             Log::error('Error al intentar asignar el lote al laboratorio. ' . $e->getMessage());
             throw new Exception('Error al intentar asignar el lote al laboratorio');
         } */
    }
}
