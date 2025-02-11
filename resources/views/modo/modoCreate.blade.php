<form class="form formEvent formCreate" data-route="Store_Modo" data-event="submit" data-tables_liged="Modo">
    
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre oficial para el modo" class="form-control nombre" name="nombre">
        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>