<?php

    namespace App\Http\Controllers;

    // Controladores
    use App\Http\Controllers\Controller;

    // Modelos
    use App\Http\Resources\Microbiologia\MediosDeCultivos\indexResources;
use Illuminate\Support\Facades\DB;

    // Helpers
    use App\Helpers\FechaDinamica;
use App\Resource\CompraLote\Manager;
use App\Resource\LoteLaboratorio\Manager as LoteLaboratorioManager;
use App\Resource\Medicion\ListarTiposMediciones;
// Requests
    use Illuminate\Http\Request;
    use Auth;
use Illuminate\Support\Facades\Log;

    class ResultadoMicrobiologiaController extends Controller {

        protected $id_analito_lab;

        public function __construct(){

        }

        public function section(Request $req){
            $dia_actual = Date("Y-m-d");
            $fecha_inicial = (isset($req->fecha_inicial) ? $req->fecha_inicial : (FechaDinamica::RestarDias($dia_actual, "30")));
            $fecha_final = (isset($req->fecha_final) ? $req->fecha_final : ($dia_actual));
            $lotesMedio = Manager::listarComprasLoteMedio();
            $lotesLab = LoteLaboratorioManager::listar();
            $laboratorios = Auth::user()->laboratorios()->where('estado', 1)->get();
            $lotesCepa = Manager::listarComprasLoteCepa();
            $tiposMedicion = ListarTiposMediciones::listadoMedicionCrecimiento();

            $arbol = new indexResources($laboratorios);
            return view("microbiologia.mediosDeCultivos.index")
            ->with("arbol", $arbol->resolve())
                ->with("lotesMedio",$lotesMedio)
                ->with("laboratorios",$laboratorios)
                // ->with("lotesLab",$lotesLab)
                // ->with('lotesCepa',$lotesCepa)
                ->with('tiposMedicion',$tiposMedicion)
                 ->with("nomSection","SeeSectionResultadoMicrobiologia")
                 ->with("id_analito_lab", $req->id_reference)
                 ->with("fecha_inicial", $fecha_inicial)
                 ->with("fecha_final", $fecha_final)
                 ->with("rol_usuario", Auth::user()->rol_id_rol);
        }
    }