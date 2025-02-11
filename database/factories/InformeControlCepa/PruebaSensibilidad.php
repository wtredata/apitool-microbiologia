<?php
namespace Database\Factories\InformeControlCepa;

use App\CompraLote;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;

class PruebaSensibilidad implements IPDFFactory{

    public function generar($loteId){
        try{
            $data = CompraLote::find($loteId);
            $fechaActual = Carbon::now();
            $fechaFormateada = $fechaActual->translatedFormat('F , d , Y');
            $fechaFormateada = ucfirst($fechaFormateada);
            $maxRegistros = $data->comentariosLotePruebaSensibilidad->map(fn($cepas) => $cepas->comentariosLoteCepa->count())->max();

            $array =[
                'nombreLaboratorio'=>$data->loteLaboratorio->first()->laboratorio->nom_laboratorio,
                'Antibiotico'=>$data->pruebasSensibilidad->first()->nom_prueba,
                'loteAntibiotico'=>$data->lote,
                'VencimientoLoteAntibiotico'=>$data->fecha_vencimiento,
                'AntibioticosDeLote'=>$data->loteCepaPruebaSensibilidad,
                'ControlesAntibiotico'=>$data->comentariosLotePruebaSensibilidad,
                'fechaActual'=> $fechaFormateada,
                'maxRegistros' => $maxRegistros
            ];
            $pdf = Pdf::loadView('microbiologia.pruebasSensibilidad.PDF.informeControlCepa',$array); 
            return $pdf->stream();
        }catch(Exception $e){
            Log::error('Error al cargar el archivo PDF de pruebas de sensibilidad: '.$e->getMessage());
            throw new Exception('Error al cargar el archivo PDF de pruebas de sensibilidad');
        }
    }
}