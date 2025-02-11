<?php

    namespace App\Http\Controllers;

    // Controladores
    use App\Http\Controllers\Controller;

    // Modelos
    use Illuminate\Support\Facades\DB;
    use App\ResultadoPruebas;

    // Helpers
    use App\Helpers\FechaDinamica;
use App\Http\Resources\Microbiologia\PruebasSensibilidad\indexResources;
use App\Resource\CompraLote\Manager;
// Requests
    use Illuminate\Http\Request;
    use Auth;

    class ResultadoPruebasController extends Controller {

        protected $id_analito_lab;

        public function __construct(){

        }

        public function section(Request $req){
            $dia_actual = Date("Y-m-d");
            $fecha_inicial = (isset($req->fecha_inicial) ? $req->fecha_inicial : (FechaDinamica::RestarDias($dia_actual, "30")));
            $fecha_final = (isset($req->fecha_final) ? $req->fecha_final : ($dia_actual));
            $lotesPruebas = Manager::listarComprasLotePruebaSensibilidad();
            $user = Auth::user();
            $laboratorios = $user->laboratorios;
            $arbol = new indexResources($laboratorios);
            return view("microbiologia.pruebasSensibilidad.index")
                ->with("arbol", $arbol->resolve())
                ->with('lotesPruebas',$lotesPruebas)
                ->with('laboratorios',$laboratorios)
                 ->with("nomSection","SeeSectionResultadoPruebas")
                 ->with("id_analito_lab", $req->id_reference)
                 ->with("fecha_inicial", $fecha_inicial)
                 ->with("fecha_final", $fecha_final)
                 ->with("rol_usuario", Auth::user()->rol_id_rol);
        }



    }