<form class="form formEvent formCreate" data-route="Store_Institucion" data-event="submit" data-tables_liged="Institucion">
    
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre oficial de la institución" class="form-control nombre" name="nombre">
        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>

    <div class="form-group">
        <label for="constante_z">Constante Z:</label>
        <input type="text" placeholder="Ingrese la constante Z" class="form-control constante_z" name="constante_z">
        <small class="form-text text-muted">Esta constante se utilizará para cada una de las sedes y en la generación de los valores estadísticos, se recomienda utilizar 1.65, 1.96 ó 2.33</small>
        <div class="contMessage contMessage_constante_z"></div>
    </div>

    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>