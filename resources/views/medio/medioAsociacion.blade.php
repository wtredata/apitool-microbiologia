<form class="form formEvent formCreate" data-route="Store_MedioCultivoLaboratorio" data-event="submit" data-tables_liged="Medio">
    
    @csrf

    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="form-label font-weight-bold" for="control_lab_laboratorio">Laboratorio</label>
                <select id="control_lab_laboratorio" class='form-control form-control-lg laboratorio'
                    name='laboratorio'>
                    <option value='{{ $laboratorio->id_laboratorio }}' selected>{{ $laboratorio->num_laboratorio }} -
                        {{ $laboratorio->nom_laboratorio }}</option>
                </select>
            </div>
            <div class="col-12 contMessage contMessage_laboratorio"></div>
        </div>
    </div>

    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="form-label font-weight-bold" for="control_lab_medio">Medio de Cultivo</label>
                <select id="control_lab_medio" class='form-control medio' name='medio'></select>
            </div>
            <div class="col-12 contMessage contMessage_medio"></div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>