<?php

namespace App\Http\Resources\Microbiologia\MediosDeCultivos;

use App\Resource\LoteLaboratorio\Manager;
use Illuminate\Http\Resources\Json\JsonResource;

class indexResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $laboratorios = [];
        foreach ($this->resource as $laboratorio) {
            $hijo = [];
            foreach ($laboratorio->loteLaboratorio as $mediosdecultivos) {
                $cepas = [];
                foreach ($mediosdecultivos->where('id_laboratorio', $laboratorio->id_laboratorio)->get() as $cepa) {
                    if(!$cepa->lote->cepas->isEmpty()){
                        $cepas[] = [
                            'title' => "Cepa " . $cepa->lote->lote . ". " . $cepa->lote->cepas->first()->nom_cepa,
                            "tooltip" => $cepa->lote->cepas->first()->nom_cepa,
                            "icon" => "icon-analito",
                            "lazy" => "true",
                            'isFolder' => false,
                            'id' => $mediosdecultivos->lote->id,
                            'children' => []
                        ];
                    }
                }

                if(!$mediosdecultivos->lote->medios->isEmpty()){
                    // dd($cepas);
                    $hijo[] = [
                        'title' => "Lote " . $mediosdecultivos->lote->lote . ". " . $mediosdecultivos->lote->medios->first()->nom_medio,
                        "tooltip" => $mediosdecultivos->lote->medios->first()->nom_medio,
                        "icon" => "icon-lote",
                        "lazy" => "true",
                        'isFolder' => true,
                        'id' => $mediosdecultivos->lote->id,
                        'laboratorioId' => $laboratorio->id_laboratorio,
                        'children' => $cepas
                    ];
                }
            }

            $laboratorios[] = [
                'title' => "Lab." . $laboratorio->num_laboratorio . " - " . $laboratorio->nom_laboratorio,
                "tooltip" => "Lab." . $laboratorio->num_laboratorio . " - " . $laboratorio->nom_laboratorio,
                "icon" => "icon-laboratorio",
                "lazy" => "true",
                'isFolder' => true,
                'children' => $hijo
            ];
        }

        return $laboratorios;
    }
}
