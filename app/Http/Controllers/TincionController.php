<?php

namespace App\Http\Controllers;

// Controladores

use App\CompraLote;
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Tincion;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\TincionRequest;
use App\Laboratorio;
use App\LoteLaboratorio;
use App\Resource\CompraLote\Manager;
use App\Resource\Medicion\ListarTiposMediciones;
use App\Resource\MedicionTincion\ListarTiposMedicionesTincion;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;

class TincionController extends Controller
{

    protected $tableTinciones;
    protected $array_get;

    public function __construct()
    {
        $this->tableTinciones = new Tincion();
        $this->array_get = array();
    }

    public static function listTinciones()
    {
        $tincion = new Tincion();
        return $tincion
            ->orderBy("tincion.nom_tincion", "asc")
            ->get();
    }
    public function section()
    {
        $tinciones = $this->tableTinciones
            ->orderByRaw('CAST(estado AS UNSIGNED) DESC') // Convierte 'estado'
            ->orderBy('nom_tincion', 'asc') // Sin prefijos de tabla
            ->get();

        return view("tincion.tincionSection")
            ->with("tinciones", $tinciones)
            ->with("nomSection", "SeeSectionTinciones");
    }
    public function index()
    {
        $tinciones = $this->tableTinciones
            ->orderByRaw('CAST(estado AS UNSIGNED) DESC') // Convierte 'estado' explícitamente
            ->orderBy('nom_tincion', 'asc') // No uses el prefijo de tabla
            ->get();

        return view("tincion.tincionIndex")
            ->with("tinciones", $tinciones);
    }
    public function store(TincionRequest $req)
    {
        $this->tableTinciones->nom_tincion = $req->nombre;
        $this->tableTinciones->save();
    }
    public static function list()
    {
        $tableTinciones = new Tincion();
        return $tableTinciones
            ->where("estado", 1)
            ->orderBy("nom_tincion", "asc")
            ->get();
    }
    public static function listAll()
    {
        $tableTinciones = new Tincion();
        return $tableTinciones
            ->orderByRaw('CAST(estado AS UNSIGNED) DESC') // Convierte 'estado'
            ->orderBy("nom_tincion", "asc")
            ->get();
    }
    public function listHTML()
    {

        $tinciones = $this->tableTinciones
            ->where("estado", 1)
            ->orderBy("nom_tincion", "asc")
            ->get();

        return view("tincion.tincionList")
            ->with("tinciones", $tinciones);
    }
    public function destroy(Request $req)
    {
        $this->tableTinciones
            ->where("id_tincion", $req->id)
            ->delete();
    }
    public function status(Request $req)
    {
        $statusNow = $this->tableTinciones
            ->where("id_tincion", $req->id)
            ->first()
            ->estado;

        $registroUpdate = $this->tableTinciones
            ->where("id_tincion", $req->id);

        if ($statusNow == 1) {
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    public function edit($id)
    {

        $tincion = $this->tableTinciones
            ->where("id_tincion", $id)
            ->with('comprasLote')
            ->first();

        return view("tincion.tincionEdit")
            ->with("tincion", $tincion);
    }
    public function show(Request $req)
    {
        $tincion = $this->tableTinciones
            ->where("id_tincion", $req->id)
            ->first();

        return view("tincion.tincionShow")
            ->with("tinciones", $tincion)
            ->with("campo", $req->campo);
    }
    public function update(TincionRequest $req)
    {
        $tincion = $this->tableTinciones
            ->where("id_tincion", $req->id)
            ->first();

        $tincion->update(
            [
                "nom_tincion" => $req->nombre
            ]
        );
        return redirect()->back();
    }
    public function asignarloteLaboratorio(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'loteTincionId' => 'required|exists:compras_lotes,id',
                'laboratorioId' => 'required|exists:laboratorio,id_laboratorio',
            ]);

            // dd($request->all());
            DB::beginTransaction();
            LoteLaboratorio::create([
                'lote_id' => $validatedData['loteTincionId'],
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

    public function detalles($id){
        $lote = CompraLote::find($id);
        if (is_null($lote)) {
            return redirect()->back()->with('error', 'No se encontró el lote');
        }

        $lotesCepa = Manager::listarComprasLoteCepa();
        return view('microbiologia.tinciones.show')
        ->with('data',$lote)
        ->with('lotesCepa',$lotesCepa)
        ->with('hoy',Carbon::now())
        ->with('tiposMedicion',ListarTiposMedicionesTincion::listadoMedicion());

    }
}
