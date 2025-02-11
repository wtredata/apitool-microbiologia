<form class="form formEvent formCreate" data-route="Store_Ciudad" data-event="submit" data-tables_liged="Ciudad" data-objjson='{"id": "ciudad_pais_reference"}'>
    
    @csrf

    <div class="form-group">
        <label for="pais">País:</label>
        <div class="row">
            <div class="col">
                <select name="pais" class="form-control pais ciudadPaisAssigned btnEvent notClear" id='ciudad_pais_reference' data-event="change" data-route="SeeIndex_Ciudad" data-tables_liged="Ciudad" data-objjson='{"id": "ciudad_pais_reference"}'>
                    @foreach($paisesList as $pais)
                        <option value="{{ $pais->id_pais }}">{{ $pais->nom_pais }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_pais"></div>
    </div>
    
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre oficial de la ciudad" class="form-control nombre" name="nombre">
        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>