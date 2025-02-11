<form class="form formEvent formCreate" data-route="Store_Laboratorio" data-event="submit" data-tables_liged="Laboratorio" data-objjson='{"id": "laboratorio_sede_reference"}'>
    
    @csrf

    <div class="form-group">
        <label for="sede">Sede:</label>
        <div class="row">
            <div class="col">
                <select name="sede" class="form-control form-control-sm sede laboratorioSedeAssigned btnEvent notClear" id='laboratorio_sede_reference' data-event="change" data-route="SeeIndex_Laboratorio" data-tables_liged="Laboratorio" data-objjson='{"id": "laboratorio_sede_reference"}'>
                    @foreach($sedesList as $sede)
                        <option value="{{ $sede->id_sede }}">{!! $sede->nom_institucion . " " . $sede->nom_sede !!}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_sede"></div>
    </div>
    
    <div class="form-group">
        <label for="num_laboratorio">Número de laboratorio:</label>
        <input type="text" placeholder="Ingrese el un número de laboratorio" class="form-control num_laboratorio" name="num_laboratorio">
        <div class="contMessage contMessage_num_laboratorio"></div>
    </div>
    
    
    <div class="form-group">
        <label for="nom_laboratorio">Nombre o descripción:</label>
        <input type="text" placeholder="Ingrese el nombre del laboratorio" class="form-control nom_laboratorio" name="nom_laboratorio">
        <div class="contMessage contMessage_nom_laboratorio"></div>
    </div>
    
    
    <div class="form-group">
        <label for="estado">Tipo:</label>
        <select name="tipo" class="form-control tipo">
            <option value="0">Secundario</option>
            <option value="1">Principal</option>
        </select>
        <small class="form-text text-muted">Indique si éste número de laboratorio es el principal o NO</small>
        <small class="form-text text-muted"><strong>IMPORTANTE:</strong> No puede haber más de un número de laboratorio principal por sede</small>
        <div class="contMessage contMessage_tipo"></div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>