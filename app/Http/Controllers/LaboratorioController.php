<?php

namespace App\Http\Controllers;

// Controladores
use App\Helpers\FechaDinamica;
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Laboratorio;

// Historicos
use App\Http\Historico\LaboratorioHistorico;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\LaboratorioRequest;

// Sesion
use Auth;

class LaboratorioController extends Controller
{

    protected $tableLabo; // Table laboratorio
    protected $historico;

    public function __construct()
    {
        $this->tableLabo = new Laboratorio();
    }

    public function getTopLaboratory(Request $req)
    {

        $search = $req->busqueda;

        $resultQuery = DB::table('laboratorio')
            ->select(
                "laboratorio.id_laboratorio",
                "laboratorio.nom_laboratorio",
                "laboratorio.num_laboratorio"
            )
            ->join("laboratorio_usuario", "id_laboratorio", "=", "laboratorio_id_laboratorio")
            ->where([
                ["laboratorio_usuario.usuario_id_usuario", Auth::user()->id_usuario],
                ["laboratorio.estado", 1]
            ])
            ->whereRaw("(laboratorio.nom_laboratorio like '%$search%' OR laboratorio.num_laboratorio like '%$search%')")
            ->orderBy("laboratorio.principal", "desc")
            ->limit(40)
            ->get();

        return $this->returnJSONGetTopLaboratory($resultQuery);
    }

    private function returnJSONGetTopLaboratory($resultQuery)
    {
        $arrayLaboratory = [];
        foreach ($resultQuery as $rowQuery) {
            array_push(
                $arrayLaboratory,
                [
                    "id" => $rowQuery->id_laboratorio,
                    "text" => $rowQuery->num_laboratorio . " - " . $rowQuery->nom_laboratorio,
                ]
            );
        }

        return response($arrayLaboratory, 200);
    }


    public static function listByUsuario()
    {
        $tableLabo = new Laboratorio();
        return $tableLabo
            ->join("laboratorio_usuario", "id_laboratorio", "=", "laboratorio_id_laboratorio")
            ->where([
                ["laboratorio_usuario.usuario_id_usuario", Auth::user()->id_usuario],
                ["laboratorio.estado", 1]
            ])
            ->orderBy("laboratorio.principal", "desc")
            ->get();
    }

    public static function listByAsignacionUsuario($id_usuario)
    {
        return DB::select(
            "select
                institucion.*,
                sede.*,
                laboratorio_1.id_laboratorio,
                laboratorio_1.num_laboratorio,
                laboratorio_1.nom_laboratorio,
                laboratorio_1.principal,
                laboratorio_1.estado,
                (
                    select 1
                    from laboratorio_usuario
                    where laboratorio_usuario.laboratorio_id_laboratorio = laboratorio_1.id_laboratorio and laboratorio_usuario.usuario_id_usuario = :id_usuario
                    limit 1
                ) as asignado
            from laboratorio as laboratorio_1
                join sede on laboratorio_1.sede_id_sede = sede.id_sede
                join institucion on sede.institucion_id_institucion = institucion.id_institucion
            where laboratorio_1.estado = 1
            order by asignado desc
            ",
            [
                "id_usuario" => $id_usuario,
            ]
        );
    }


    public static function listItem($id)
    {
        $tableLabo = new Laboratorio();
        return $tableLabo
            ->select(
                "*",
                "laboratorio.estado as laboratorio_estado"
            )
            ->join('sede', 'laboratorio.sede_id_sede', '=', 'sede.id_sede')
            ->join('institucion', 'sede.institucion_id_institucion', '=', 'institucion.id_institucion')
            ->where([
                ["laboratorio.id_laboratorio", $id]
            ])
            ->first();
    }


    public function index(Request $req)
    {
        $laboratorios = $this->tableLabo
            ->select(
                "*",
                "laboratorio.estado as laboratorio_estado"
            )
            ->join('sede', 'laboratorio.sede_id_sede', '=', 'sede.id_sede')
            ->join('institucion', 'sede.institucion_id_institucion', '=', 'institucion.id_institucion')
            ->orderBy("laboratorio.estado", "desc")
            ->orderBy("institucion.nom_institucion", "asc")
            ->orderBy("sede.nom_sede", "asc")
            ->orderBy("laboratorio.num_laboratorio", "asc")
            ->where([
                ["sede.id_sede", $req->id]
            ])
            ->get();

        return view("laboratorio.laboratorioIndex")
            ->with("laboratorios", $laboratorios);
    }

//    public function section(Request $req)
//    {
//        $dia_actual = Date("Y-m-d");
//        $fecha_inicial = FechaDinamica::RestarDias($dia_actual, "30");
//        $fecha_final = $dia_actual;
//
//        $laboratorios = LaboratorioController::listByUsuario();
//        $acciones = self::listAcciones();
//
//        $analitos = AnalitoController::listAnalitos();
//
//        return view("laboratorio.laboratorioPage")
//            ->with("nomSection", "SeeSectionLaboratorio")
//            ->with("laboratorios", $laboratorios)
//            ->with("analitos", $analitos)
//            ->with("fecha_inicial", $fecha_inicial)
//            ->with("fecha_final", $fecha_final)
//            /*->with("acciones", $acciones)*/ ;
//    }


    public function store(LaboratorioRequest $req)
    {
        $this->tableLabo->sede_id_sede = $req->sede;
        $this->tableLabo->num_laboratorio = $req->num_laboratorio;
        $this->tableLabo->nom_laboratorio = $req->nom_laboratorio;
        $this->tableLabo->principal = intval($req->tipo);
        $this->tableLabo->save();
    }


    public function destroy(Request $req)
    {
        $this->tableLabo
            ->where("id_laboratorio", $req->id)
            ->delete();
    }


    public function status(Request $req)
    {
        $statusNow = $this->tableLabo
            ->where("id_laboratorio", $req->id)
            ->first()
            ->estado; // Seleccionar el estado de la institucion que sea igual a la indicada

        $registroUpdate = $this->tableLabo
            ->where("id_laboratorio", $req->id);

        if ($statusNow == 1) {
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }


    public function edit(Request $req)
    {

        $laboratorio = $this->tableLabo
            ->where("id_laboratorio", $req->id)
            ->first();

        switch ($req->campo) {
            case "sede":
                $sedes = SedeController::list();
                return view("laboratorio.laboratorioEdit")
                    ->with("sedes", $sedes)
                    ->with("campo", $req->campo)
                    ->with("laboratorio", $laboratorio);
                break;

            case "num_laboratorio":
                return view("laboratorio.laboratorioEdit")
                    ->with("campo", $req->campo)
                    ->with("laboratorio", $laboratorio);
                break;

            case "nom_laboratorio":
                return view("laboratorio.laboratorioEdit")
                    ->with("campo", $req->campo)
                    ->with("laboratorio", $laboratorio);
                break;

            case "tipo":
                return view("laboratorio.laboratorioEdit")
                    ->with("campo", $req->campo)
                    ->with("laboratorio", $laboratorio);
                break;

            default:
                abort(500, "Opción de modificación no encontrada");
                break;
        }
    }


    public function show(Request $req)
    {
        $laboratorio = $this->tableLabo
            ->select(
                "institucion.nom_institucion as institucion",
                "sede.nom_sede as sede",
                "num_laboratorio as num_laboratorio",
                "nom_laboratorio as nom_laboratorio",
                "principal as principal"
            )
            ->join('sede', 'laboratorio.sede_id_sede', '=', 'sede.id_sede')
            ->join('institucion', 'sede.institucion_id_institucion', '=', 'institucion.id_institucion')
            ->where("id_laboratorio", $req->id)
            ->first();

        return view("laboratorio.laboratorioShow")
            ->with("laboratorio", $laboratorio)
            ->with("campo", $req->campo);
    }


    public function update(LaboratorioRequest $req)
    {
        $laboratorio = $this->tableLabo
            ->where("id_laboratorio", $req->id)
            ->first(); // Se selecciona la institucion a la cual se desea realizar la actualización

        switch ($req->campo) {
            case "sede":
                $laboratorio->update(["sede_id_sede" => $req->sede]);
                break;

            case "num_laboratorio":
                $laboratorio->update(["num_laboratorio" => $req->num_laboratorio]);
                break;


            case "nom_laboratorio":
                $laboratorio->update(["nom_laboratorio" => $req->nom_laboratorio]);
                break;

            case "tipo":
                if ($req->tipo == 1) {
                    $laboratorio->update(["principal" => 1]);
                } else {
                    $laboratorio->update(["principal" => 0]);
                }
                break;

            default:
                abort(500, "Opción de modificación no encontrada");
                break;
        }
    }
}
