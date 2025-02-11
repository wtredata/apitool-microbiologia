<form class="form formEvent formCreate" data-route="Store_Lote" data-event="submit" data-tables_liged="Lote" data-objjson='{"id": "lote_control_reference"}'>
    
    @csrf

    <div class="form-group">
        <label for="control">Control:</label>
        <div class="row">
            <div class="col">
                <select name="control" class="form-control form-control-sm control loteControlAssigned btnEvent notClear" id='lote_control_reference' data-event="change" data-route="SeeIndex_Lote" data-tables_liged="Lote" data-objjson='{"id": "lote_control_reference"}'></select>
            </div>
        </div>
        <div class="contMessage contMessage_control"></div>
    </div>


    <div class="form-group">
        <label for="numLote">Identificador de lote maestro:</label>
        <div class="row">
            <div class="col">
                <input type="text" placeholder="Ingrese el número de lote maestro" class="form-control numLote" name="numLote">
            </div>
        </div>
        <div class="contMessage contMessage_numLote"></div>
    </div>


    <div class="form-group">
        <label for="fecha">Fecha de vencimiento:</label>
        <div class="row">
            <div class="col">
                <input type="text" placeholder="Especifique la fecha de vencimiento" class="form-control fecha inputDateSingle" name="fecha">
            </div>
        </div>
        <div class="contMessage contMessage_fecha"></div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>