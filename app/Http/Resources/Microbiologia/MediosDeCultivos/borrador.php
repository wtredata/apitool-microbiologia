
<<<<<<< HEAD

=======
                foreach ($mediosdecultivos->lote->LoteMedioCepas as $cepa) {
                    // if(!$cepa->lote->cepas->isEmpty()){
                        // dd($cepa->loteCepas);
                        // dd($cepa->loteCepas->loteLaboratorio->id_laboratorio, $laboratorio->id_laboratorio);
                        // foreach($cepa->loteCepas->loteLaboratorio as $loteLab){
                            if($cepa->loteLaboratorio->id_laboratorio == $laboratorio->id_laboratorio){
                                $cepas[] = [
                                    'title' => "Cepa " . $cepa->loteCepas->lote . ". " . $cepa->loteCepas->cepas->first()->nom_cepa,
                                    "tooltip" => $cepa->loteCepas->cepas->first()->nom_cepa,
                                    "icon" => "icon-analito",
                                    "lazy" => "true",
                                    'isFolder' => false,
                                    'id' => $mediosdecultivos->lote->id,
                                    'laboratorioId' => $laboratorio->id_laboratorio,
                                    'children' => []
                                ];
                            }
                        // }
                    // }
>>>>>>> 7ae496f8d717b7e60977375ff847b6c78f2ddc10