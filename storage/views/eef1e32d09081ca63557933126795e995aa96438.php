<form class="form formEvent formCreate" data-route="Store_Matriz" data-event="submit" data-tables_liged="Matriz">
    
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre oficial del proveedor" class="form-control nombre" name="nombre">
        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form><?php /**PATH /var/www/html/resources/views/matriz/matrizCreate.blade.php ENDPATH**/ ?>