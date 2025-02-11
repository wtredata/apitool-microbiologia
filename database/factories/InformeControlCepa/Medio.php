<?php

namespace Database\Factories\InformeControlCepa;

use App\CompraLote;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;

class Medio implements IPDFFactory
{


    public function generar($loteId)
    {
        try {
            Log::info('entra en el metodo generar PDF de medio');
            set_time_limit(300); // 5 minutos
            $data = CompraLote::find($loteId);
            $fechaActual = Carbon::now();
            $fechaFormateada = $fechaActual->translatedFormat('F, d, Y');
            $fechaFormateada = ucfirst($fechaFormateada);
            $maxRegistros = $data->comentariosLoteMedio->map(fn($cepas) => $cepas->comentariosLoteCepa->count())->max();

            $array = [
                'nombreLaboratorio' => $data->loteLaboratorio->first()->laboratorio->nom_laboratorio,
                'idLaboratorio' => $data->loteLaboratorio->first()->laboratorio->id_laboratorio,
                'nombreMedio' => $data->medios->first()->nom_medio,
                'loteMedio' => $data->lote,
                'VencimientoLoteMedio' => $data->fecha_vencimiento,
                'CepasDeLote' => $data->LoteCepaMedios,
                'ControlesCepa' => $data->comentariosLoteMedio,
                'fechaActual' => $fechaFormateada,
                'maxRegistros' => $maxRegistros
            ];
            $pdf = Pdf::loadView('microbiologia.mediosDeCultivos.PDF.informeControlCepa', $array);
            return $pdf->stream();
        } catch (Exception $e) {
            Log::error('Error al cargar el archivo PDF de medios de cultivo: ' . $e->getMessage());
            throw new Exception('Error al cargar el archivo PDF de medios de cultivo');
        }
    }
}
