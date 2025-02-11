<form class="form formEvent formCreate" data-route="Store_Cepa" data-event="submit" data-tables_liged="Cepa"> 
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre de la cepa" class="form-control nombre" name="nombre" required>
       <!---- <label for="lote">Numero lote:</label>
        <input type="text" placeholder="Ingrese numero de lote de la cepa" class="form-control lote" name="lote" required>
        
        <label for="fecha">Fecha:</label>
        <input type="text" placeholder="Ingrese fecha de lote de la cepa" class="form-control fecha" name="fecha" required>--->
        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>
<br>
<br>
<img src="{{ asset('img/cepas.png') }}" alt="Imagen de Cepas" class="img-fluid" style="width: 100%;">

