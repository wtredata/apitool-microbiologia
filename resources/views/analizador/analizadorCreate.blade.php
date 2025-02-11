<form class="form formEvent formCreate" data-route="Store_Analizador" data-event="submit" data-tables_liged="Analizador">
    
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre del analizador" class="form-control nombre" name="nombre">
        <small class="form-text text-muted">Digite el nombre técnico y asegúrese de evitar la duplicidad de información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>

    <div class="form-group">
        <label for="codigo">Código:</label>
        <input type="text" placeholder="Ingrese el código de ser necesario" class="form-control codigo" name="codigo">
        <small class="form-text text-muted"><strong>Nota: Especifíque el código de identificación del analizador</strong></small>
        <div class="contMessage contMessage_codigo"></div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>