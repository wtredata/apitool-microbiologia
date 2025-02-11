<form class="form formEvent formCreate" data-route="Store_Pais" data-event="submit" data-tables_liged="Pais">
    
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre del pais" class="form-control nombre" name="nombre">
        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form><?php /**PATH /var/www/html/resources/views/pais/paisCreate.blade.php ENDPATH**/ ?>