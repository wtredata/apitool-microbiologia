<form class="form formEvent formCreate" data-route="Store_Control" data-event="submit" data-tables_liged="Control" data-objjson='{"id": "control_proveedor_reference"}'>
    
    @csrf

    <div class="form-group">
        <label for="proveedor">Proveedor:</label>
        <div class="row">
            <div class="col">
                <select name="proveedor" class="form-control form-control proveedor controlProveedorAssigned btnEvent notClear" id='control_proveedor_reference' data-event='change' data-route='SeeIndex_Control' data-tables_liged="Control" data-objjson='{"id": "control_proveedor_reference"}'>
                    @foreach($proveedoresList as $proveedor)
                        <option value="{{ $proveedor->id_proveedor }}">{{ $proveedor->nom_proveedor }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_proveedor"></div>
    </div>


    <div class="form-group">
        <label for="matriz">Matriz:</label>
        <div class="row">
            <div class="col">
                <select name="matriz" class="form-control form-control matriz controlMatrizAssigned">
                    @foreach($matricesList as $matriz)
                        <option value="{{ $matriz->id_matriz }}">{{ $matriz->nom_matriz }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_matriz"></div>
    </div>
    

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre oficial del control de calidad" class="form-control form-control nombre" name="nombre">
        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>
    
    
    <div class="form-group">
        <label for="numNiveles">Número de niveles:</label>
        <select name="numNiveles" class="form-control form-control numNiveles">
            <option value="">Seleccione el número de niveles...</option>
            <option value="1">1 nivel</option>
            <option value="2">2 niveles</option>
            <option value="3">3 niveles</option>
            <option value="4">4 niveles</option>
            <option value="5">5 niveles</option>
            <option value="6">6 niveles</option>
        </select>
        <div class="contMessage contMessage_numNiveles"></div>
    </div>
        
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>