<?php
namespace Database\Factories\InformeControlCepa;

use App\CompraLote;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;

class Tincion implements IPDFFactory{

    public function generar($loteId){
        try{
            $data = CompraLote::find($loteId);
            $fechaActual = Carbon::now();
            $fechaFormateada = $fechaActual->translatedFormat('F , d , Y');
            $fechaFormateada = ucfirst($fechaFormateada);
            $maxRegistros = $data->comentariosLoteTincion->map(fn($cepas) => $cepas->comentariosLoteCepaTincion->count())->max();

            $array =[
                'nombreLaboratorio'=>$data->loteLaboratorio->first()->laboratorio->nom_laboratorio,
                'nombreTincion'=>$data->tinciones->first()->nom_tincion,
                'loteTincion'=>$data->lote,
                'VencimientoLoteTincion'=>$data->fecha_vencimiento,
                'CepasDeLote'=>$data->LoteTincionCepas,
                'ControlesCepa'=>$data->comentariosLoteTincion,
                'fechaActual'=>$fechaFormateada,
                'maxRegistros' => $maxRegistros
            ];
            $pdf = Pdf::loadView('microbiologia.tinciones.PDF.informeControlCepa',$array); 
            return $pdf->stream();
        }catch(Exception $e){
            Log::error('Error al cargar el archivo PDF: '.$e->getMessage());
            throw new Exception('Error al cargar el archivo PDF');
        }
    }
}