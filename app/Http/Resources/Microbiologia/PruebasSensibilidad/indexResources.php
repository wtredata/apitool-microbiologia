<?php

namespace App\Http\Resources\Microbiologia\PruebasSensibilidad;

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
            foreach ($laboratorio->loteLaboratorio as $pruebas) {

                // dd($pruebas->lote->pruebasSensibilidad);

                $cepas = [];
                foreach ($pruebas->lote->lotePruebaSensibilidadCepas as $cepa) {
                    if ($cepa->loteLaboratorio->id_laboratorio == $laboratorio->id_laboratorio) {
                        $cepas[] = [
                            'title' => "Cepa " . $cepa->loteCepas->lote . ". " . $cepa->loteCepas->cepas->first()->nom_cepa,
                            "tooltip" => $cepa->loteCepas->cepas->first()->nom_cepa,
                            "icon" => "icon-analito",
                            "lazy" => "true",
                            'isFolder' => false,
                            'id' => $pruebas->lote->id,
                            'children' => []
                        ];
                    }
                }
                if (!$pruebas->lote->pruebasSensibilidad->isEmpty()) {
                    $hijo[] = [
                        'title' => "Lote " . $pruebas->lote->lote . ". " . $pruebas->lote->pruebasSensibilidad->first()->nom_prueba,
                        "tooltip" => $pruebas->lote->pruebasSensibilidad->first()->nom_prueba,
                        "icon" => "icon-lote",
                        "lazy" => "true",
                        'isFolder' => true,
                        'id' => $pruebas->lote->id,
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
