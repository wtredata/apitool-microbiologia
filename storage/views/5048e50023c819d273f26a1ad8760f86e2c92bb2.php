<form class="form formEvent formCreate" data-route="Store_Control" data-event="submit" data-tables_liged="Control" data-objjson='{"id": "control_proveedor_reference"}'>
    
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="proveedor">Proveedor:</label>
        <div class="row">
            <div class="col">
                <select name="proveedor" class="form-control form-control proveedor controlProveedorAssigned btnEvent notClear" id='control_proveedor_reference' data-event='change' data-route='SeeIndex_Control' data-tables_liged="Control" data-objjson='{"id": "control_proveedor_reference"}'>
                    <?php $__currentLoopData = $proveedoresList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($proveedor->id_proveedor); ?>"><?php echo e($proveedor->nom_proveedor); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_proveedor"></div>
    </div>


    <div class="form-group">
        <label for="matriz">Matriz:</label>
        <div class="row">
            <div class="col">
                <select name="matriz" class="form-control form-control matriz controlMatrizAssigned">
                    <?php $__currentLoopData = $matricesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matriz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($matriz->id_matriz); ?>"><?php echo e($matriz->nom_matriz); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_matriz"></div>
    </div>
    

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Ingrese el nombre oficial del control de calidad" class="form-control form-control nombre" name="nombre">
        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>
        <div class="contMessage contMessage_nombre"></div>
    </div>
    
    
    <div class="form-group">
        <label for="numNiveles">Número de niveles:</label>
        <select name="numNiveles" class="form-control form-control numNiveles">
            <option value="">Seleccione el número de niveles...</option>
            <option value="1">1 nivel</option>
            <option value="2">2 niveles</option>
            <option value="3">3 niveles</option>
            <option value="4">4 niveles</option>
            <option value="5">5 niveles</option>
            <option value="6">6 niveles</option>
        </select>
        <div class="contMessage contMessage_numNiveles"></div>
    </div>
        
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form><?php /**PATH /var/www/html/resources/views/control/controlCreate.blade.php ENDPATH**/ ?>