<form class="form formEvent formCreate" data-route="Store_Medio" data-event="submit" data-tables_liged="Medio" autocomplete="off">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre del medio de cultivo" class="form-control nombre" name="nombre" required>
        
        <label for="caracteristica">Característica:</label>
        {{-- <input type="text" placeholder="Ingrese el nombre del medio de cultivo" class="form-control nombre" name="nombre" required> --}}
        <textarea name="caracteristica" id="" cols="30" rows="5" class="form-control"></textarea>

        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>

    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>
<img src="{{ asset('img/agares.png') }}" alt="Imagen de pruebas" style="width:100%;">