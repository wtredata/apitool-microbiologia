<form class="form formEvent formCreate" data-route="Store_Analito" data-event="submit" data-tables_liged="Analito">

    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="codigo">Código:</label>
        <input type="text" placeholder="Ingrese el código de ser necesario" class="form-control codigo" name="codigo">
        <small class="form-text text-muted"><strong>Nota: Especifíque el código de identificación del analito</strong></small>
        <div class="contMessage contMessage_codigo"></div>
    </div>


    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre oficial del analito" class="form-control nombre" name="nombre">
        <small class="form-text text-muted">Digite el nombre técnico y asegúrese de evitar la duplicidad de información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>
    

    <div class="form-group">
        <label for="estado">Tipo de analito:</label>
        <select name="cualitativo" class="form-control form-control-sm cualitativo">
            <option value="0">Cuantitativo</option>
            <option value="1">Cualitativo</option>
        </select>
        <small class="form-text text-muted">Indique si éste analito es cuantitativo o cualitativo</small>
        <div class="contMessage contMessage_cualitativo"></div>
    </div>

    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form><?php /**PATH /var/www/html/resources/views/analito/analitoCreate.blade.php ENDPATH**/ ?>