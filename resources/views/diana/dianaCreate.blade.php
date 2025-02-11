<form class="form formEvent formCreate" data-route="Store_DIANA" data-event="submit"
    data-tables_liged="DIANA" data-objjson='{"id_reference": "diana_analito_laboratorio", "nivel_analito": "diana_nivel_analito"}' >

    @csrf
    
    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="form-label font-weight-bold" for="diana_analito_laboratorio">Analito</label>
                <select id="diana_analito_laboratorio" class='form-control form-control-lg analito_laboratorio'
                    name='analito_laboratorio'>
                    <option value='{{ $analito_laboratorio->id_analito_lab }}' selected>{{ $analito_laboratorio->nom_analito }}  | {{ $analito_laboratorio->nom_analizador }} | {{ $analito_laboratorio->nom_metodo }} | {{ $analito_laboratorio->nom_reactivo }} | {{ $analito_laboratorio->generacion_reactivo }} | {{ $analito_laboratorio->nom_unidad }} | {{ $analito_laboratorio->nom_temperatura }}</option>
                </select>
            </div>
            <div class="col-12 contMessage contMessage_analito_laboratorio"></div>
        </div>
    </div>


    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="form-label font-weight-bold" for="diana_nivel_analito">Nivel</label>
                <select id="diana_nivel_analito" class='form-control form-control-lg nivel_analito' name='nivel_analito'>
                    <option value='{{ $nivel }}' selected>{{ $nivel }}</option>
                </select>
            </div>
            <div class="col-12 contMessage contMessage_nivel_analito"></div>
        </div>
    </div>


    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="form-label font-weight-bold" for="diana_fecha_vigencia">Fecha de vigencia</label>
                <input type="date" value="{{ Date('Y-m-d') }}" id='diana_fecha_vigencia' class='form-control fecha_vigencia notClear' name='fecha_vigencia'>
            </div>
            <div class="col-12 contMessage contMessage_fecha_vigencia"></div>
        </div>
    </div>

    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="form-label font-weight-bold" for="aps_valor">Valor DIANA</label>
                <input type="text" id='diana_valor' class='form-control valor' name='valor'>
            </div>
            <div class="col-12 contMessage contMessage_valor"></div>
        </div>
    </div>


    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="form-label font-weight-bold" for="diana_justificacion">Justificación</label>
                <textarea name="justificacion" id="diana_justificacion" cols="30" rows="7" class='form-control justificacion'></textarea>
            </div>
            <div class="col-12 contMessage contMessage_justificacion"></div>
        </div>
    </div>

    <div class="form-outline mb-4">
        <button type="submit" class="btn btn-sm btn-primary ml-0 mr-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle mr-1">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
            <span class='text'>Agregar nuevo valor DIANA</span>
        </button>
    </div>
</form>