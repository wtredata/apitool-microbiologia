<form class="form formEvent formCreate" data-route="Store_Sede" data-event="submit" data-tables_liged="Sede" data-objjson='{"id": "sede_institucion_reference"}'>
    
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="institucion">Institución:</label>
        <div class="row">
            <div class="col">
                <select name="institucion" class="form-control form-control-sm institucion sedeInstitucionAssigned btnEvent notClear" id='sede_institucion_reference' data-event='change' data-route="SeeIndex_Sede" data-tables_liged="Sede" data-objjson='{"id": "sede_institucion_reference"}'>
                    <?php $__currentLoopData = $institucionesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($institucion->id_institucion); ?>"><?php echo e($institucion->nom_institucion); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_institucion"></div>
    </div>
    
    <div class="form-group">
        <label for="ciudad">Ciudad:</label>
        <div class="row">
            <div class="col">
                <select name="ciudad" class="form-control form-control-sm sede sedeCiudadAssigned"></select>
            </div>
        </div>
        <div class="contMessage contMessage_ciudad"></div>
    </div>

    
    <div class="form-group">
        <label for="nombre">Nombre de la sede:</label>
        <input type="text" placeholder="Ingrese el nombre oficial de la sede" class="form-control nombre" name="nombre">
        <div class="contMessage contMessage_nombre"></div>
    </div>


    <div class="form-group">
        <label for="nom_contacto">Nombre de contacto:</label>
        <input type="text" placeholder="Nombre de la presona de contacto" class="form-control nom_contacto" name="nom_contacto">
        <div class="contMessage contMessage_nom_contacto"></div>
    </div>

    <div class="form-group">
        <label for="tel_contacto">Teléfono de contacto:</label>
        <input type="text" placeholder="Número de teléfono de contacto" class="form-control tel_contacto" name="tel_contacto">
        <div class="contMessage contMessage_tel_contacto"></div>
    </div>

    <div class="form-group">
        <label for="correo_contacto">Correo de contacto:</label>
        <input type="text" placeholder="Ingrese el correo de contacto de la sede" class="form-control correo_contacto" name="correo_contacto">
        <div class="contMessage contMessage_correo_contacto"></div>
    </div>

    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" placeholder="Ingrese la dirección física de la sede" class="form-control direccion" name="direccion">
        <div class="contMessage contMessage_direccion"></div>
    </div>
        
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form><?php /**PATH /var/www/html/resources/views/sede/sedeCreate.blade.php ENDPATH**/ ?>