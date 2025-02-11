<form class="form formEvent formCreate" data-route="Store_AnalitoLaboratorio" data-event="submit"
    data-tables_liged="AnalitoLaboratorio" data-objjson='{"id_reference": "analito_lab_control_laboratorio"}'
    data-fancyliged='tree_resultados'>

    @csrf
    
    <input type="hidden" id='analito_lab_control_laboratorio' class='notClear' value='{{ $control_laboratorio->id_control_laboratorio }}' name='control_laboratorio'>

    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="mb-0 form-label font-weight-bold" for="analito_lab_analito">Analito</label>
                <select id="analito_lab_analito" class='form-control analito btnEvent analito_lab_analito notClear' data-event='change' data-ligamiento_select_padre='true' data-select_padre='analito_lab_analito' data-route='SeeList_Metodologia|||SeeList_Unidad|||SeeList_Temperatura' data-select_liged='analito_lab_metodologia&&&analito_lab_unidades&&&analito_lab_temperatura' name='analito'></select>
            </div>
            <div class="col-12 contMessage contMessage_analito"></div>
        </div>
    </div>

    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="mb-0 form-label font-weight-bold" for="analito_lab_analizador">Analizador</label>
                <select id="analito_lab_analizador" class='form-control analizador notClear' name='analizador'></select>
            </div>
            <div class="col-12 contMessage contMessage_analizador"></div>
        </div>
    </div>

    
    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="mb-0 form-label font-weight-bold" for="analito_lab_metodologia">Metodología</label>
                <select id="analito_lab_metodologia" class='form-control metodologia analito_lab_metodologia notClear' name='metodologia'>
                    <option value="" disabled>Seleccione primeramente un analito...</option>
                </select>
            </div>
            <div class="col-12 contMessage contMessage_metodologia"></div>
        </div>
    </div>


    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <label class="mb-0 form-label font-weight-bold" for="analito_lab_reactivo">Reactivo</label>
                        <select id="analito_lab_reactivo" class='form-control reactivo notClear' name='reactivo'></select>
                    </div>
                    <div class="col-12 contMessage contMessage_reactivo"></div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <label class="mb-0 form-label font-weight-bold" for="analito_lab_gen_vitros">N° GEN</select>
                    </div>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <div class="input-group-text pl-4 pr-1">
                                <input type="checkbox" class="form-check-input btnEvent notClear" data-event='change' data-route='ToggleInput' data-campofinal="#analito_lab_gen_vitros" 
                                    aria-label="Checkbox para la generación VITROS" name='check_gen_vitros'>
                            </div>

                            <input type="number" class="form-control gen_vitros notClear" name='gen_vitros' id='analito_lab_gen_vitros' value='' placeholder='N/A' disabled='true'>
                        </div>
                    </div>
                    <div class="col-12 contMessage contMessage_gen_vitros"></div>
                </div>
            </div>
        </div>
    </div>



    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <label class="mb-0 form-label font-weight-bold" for="analito_lab_unidades"
                            title='Unidades de medición'>Unidades</label>
                        <select id="analito_lab_unidades" class='form-control unidades analito_lab_unidades notClear' name='unidades'>
                            <option value="" disabled>Seleccione primeramente un analito...</option>
                        </select>
                    </div>
                    <div class="col-12 contMessage contMessage_unidades"></div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <label class="mb-0 form-label font-weight-bold" for="analito_lab_temperatura"
                            title='Temperatura en grados centigrados'>Temp. °C</label>
                        <select id="analito_lab_temperatura" class='form-control temperatura analito_lab_temperatura notClear' name='temperatura'>
                            <option value="">Sin temperatura</option>
                        </select>
                    </div>
                    <div class="col-12 contMessage contMessage_temperatura"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="form-outline mb-4">
        <button type="submit" class="btn btn-sm btn-primary ml-0 mr-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle mr-1">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
            <span class='text'>Agregar analito</span>
        </button>
    </div>
</form>