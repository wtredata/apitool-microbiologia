<form class="form formEvent formCreate" data-route="Store_Prueba" data-event="submit" data-tables_liged="Prueba">
    
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre de la prueba de sensibilidad" class="form-control nombre" name="nombre">
        <small class="form-text text-muted">Digite el nombre técnico y asegúrese de evitar la duplicidad de información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>

    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>
<br><br>
<img src="{{ asset('img/pruebas.png') }}" alt="Imagen de pruebas" style="width: 100%;">