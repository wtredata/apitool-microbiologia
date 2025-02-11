<?php

    namespace App\Http\Controllers;

    // Controladores
    use App\Http\Controllers\Controller;
    use App\Http\Controllers\AnalitoLaboratorioController;
    use App\Http\Controllers\SerieController;

    // Modelos
    use Illuminate\Support\Facades\DB;
    // use App\Resultado;

    // Helpers
    use App\Helpers\FechaDinamica;

    // Requests
    use Illuminate\Http\Request;
    // use Auth;

    class GraficaIntegradaController extends Controller {

        // protected $id_analito_lab;

        public function __construct(){
            // $this->tableArea = new Area();
        }

        public function section(Request $req){
            
            $dia_actual = Date("Y-m-d");
            $fecha_inicial = (isset($req->fecha_inicial) ? $req->fecha_inicial : (FechaDinamica::RestarDias($dia_actual, "30")));
            $fecha_final = (isset($req->fecha_final) ? $req->fecha_final : ($dia_actual));
        
            return view("graficaIntegrada") 
                ->with("nomSection","SeeSectionGraficaIntegrada")
                ->with("id_analito_lab", $req->id_reference)
                ->with("fecha_inicial", $fecha_inicial)
                ->with("fecha_final", $fecha_final);
        }
    }