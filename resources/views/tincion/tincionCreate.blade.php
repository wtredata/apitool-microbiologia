<form class="form formEvent formCreate" data-route="Store_Tincion" data-event="submit" data-tables_liged="Tincion">
    
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre de la tinción" class="form-control nombre" name="nombre">

        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>
<br><br>
<img src="{{ asset('img/tinciones.png') }}" alt="Imagen de Agares" style="width: 100%;">