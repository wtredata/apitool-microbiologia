<?php switch($campo):
    case ("proveedor"): ?>
    <form class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Control&&&Update_Control" data-field="proveedor&&&proveedor" data-action_save="true&&&true" data-reference="<?php echo e($control->id_control); ?>&&&<?php echo e($control->id_control); ?>">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Control" data-field="proveedor" data-reference="<?php echo e($control->id_control); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Control" data-field="proveedor" data-reference="<?php echo e($control->id_control); ?>" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select name="proveedor" data-isselect2='true' class="form-control form-control-sm proveedor">
                    <option value="">Seleccione un proveedor...</option>
                    <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($control->proveedor_id_proveedor == $proveedor->id_proveedor): ?>
                            <option value="<?php echo e($proveedor->id_proveedor); ?>" selected><?php echo e($proveedor->nom_proveedor); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($proveedor->id_proveedor); ?>"><?php echo e($proveedor->nom_proveedor); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <div class="invalid-feedback text-right contMessage_proveedor"></div>
            </div>
        </div>
        
    </form>
    <?php break; ?>


    <?php case ("matriz"): ?>
    <form class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Control&&&Update_Control" data-field="matriz&&&matriz" data-action_save="true&&&true" data-reference="<?php echo e($control->id_control); ?>&&&<?php echo e($control->id_control); ?>">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Control" data-field="matriz" data-reference="<?php echo e($control->id_control); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Control" data-field="matriz" data-reference="<?php echo e($control->id_control); ?>" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select name="matriz" data-isselect2='true' class="form-control form-control-sm matriz">
                    <option value="">Seleccione una matriz...</option>
                    <?php $__currentLoopData = $matrices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matriz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($matriz->id_matriz); ?>"><?php echo e($matriz->nom_matriz); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <div class="invalid-feedback text-right contMessage_matriz"></div>
            </div>
        </div>
        
    </form>
    <?php break; ?>


    <?php case ("nombre"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Control&&&Update_Control" data-field="nombre&&&nombre" data-action_save="true&&&true" data-reference="<?php echo e($control->id_control); ?>&&&<?php echo e($control->id_control); ?>">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Control" data-field="nombre" data-reference="<?php echo e($control->id_control); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Control" data-field="nombre" data-reference="<?php echo e($control->id_control); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nombre" class="form-control form-control-sm nombre" value="<?php echo e($control->nom_control); ?>">

            <div class="invalid-feedback text-right contMessage_nombre"></div>
        </div>
    </form>
    <?php break; ?>


    <?php case ("numNiveles"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Control&&&Update_Control" data-field="numNiveles&&&numNiveles" data-action_save="true&&&true" data-reference="<?php echo e($control->id_control); ?>&&&<?php echo e($control->id_control); ?>">  
        <div class="input-group min-width-input">
            
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Control" data-field="numNiveles" data-reference="<?php echo e($control->id_control); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Control" data-field="numNiveles" data-reference="<?php echo e($control->id_control); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <select name="numNiveles" data-isselect2='true' class="form-control form-control-sm numNiveles">
                <option value="">Seleccione el número de niveles...</option>
                <option value="1" selected>1 Nivel</option>
                <option value="2" selected>2 Niveles</option>
                <option value="3" selected>3 Niveles</option>
                <option value="4" selected>4 Niveles</option>
                <option value="5" selected>5 Niveles</option>
                <option value="6" selected>6 Niveles</option>
            </select>

            <div class="invalid-feedback text-right contMessage_numNiveles"></div>
        </div>
    </form>
    <?php break; ?>

<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/control/controlEdit.blade.php ENDPATH**/ ?>