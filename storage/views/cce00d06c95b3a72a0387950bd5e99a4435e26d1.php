<?php switch($campo):
    case ("control"): ?>
    <form 
        class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Lote&&&Update_Lote" 
        data-field="control&&&control" data-action_save="true&&&true" 
        data-reference="<?php echo e($lote->id_lote); ?>&&&<?php echo e($lote->id_lote); ?>">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button 
                        class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" 
                        data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Lote" data-field="control" data-reference="<?php echo e($lote->id_lote); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Lote" data-field="control" data-reference="<?php echo e($lote->id_lote); ?>" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select name="control" class="form-control form-control-sm control" data-isselect2='true'>
                    <option value="">Seleccione un control...</option>
                    <?php $__currentLoopData = $controles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($lote->control_id_control == $control->id_control): ?>
                            <option value="<?php echo e($control->id_control); ?>" selected><?php echo e($control->nom_control); ?> | <?php echo e($control->nom_proveedor); ?> | <?php echo e($control->nom_matriz); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($control->id_control); ?>"><?php echo e($control->nom_control); ?> | <?php echo e($control->nom_proveedor); ?> | <?php echo e($control->nom_matriz); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <div class="invalid-feedback text-right contMessage_control"></div>
            </div>
        </div>
        
    </form>
    <?php break; ?>

    <?php case ("numLote"): ?>
    <form 
        class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Lote&&&Update_Lote" 
        data-field="numLote&&&numLote" data-action_save="true&&&true" 
        data-reference="<?php echo e($lote->id_lote); ?>&&&<?php echo e($lote->id_lote); ?>">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button 
                        class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" 
                        data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Lote" data-field="numLote" data-reference="<?php echo e($lote->id_lote); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Lote" data-field="numLote" data-reference="<?php echo e($lote->id_lote); ?>" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <input type="text" name="numLote" class="form-control numLote" placeholder="Ingrese el número de lote maestro" value="<?php echo e($lote->cod_lote); ?>">

                <div class="invalid-feedback text-right contMessage_numLote"></div>
            </div>
        </div>
        
    </form>
    <?php break; ?>


    <?php case ("fecha"): ?>
    <form 
        class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Lote&&&Update_Lote" 
        data-field="fecha&&&fecha" data-action_save="true&&&true" 
        data-reference="<?php echo e($lote->id_lote); ?>&&&<?php echo e($lote->id_lote); ?>">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button 
                        class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" 
                        data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Lote" data-field="fecha" data-reference="<?php echo e($lote->id_lote); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Lote" data-field="fecha" data-reference="<?php echo e($lote->id_lote); ?>" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <input type="text" name="fecha" class="form-control fecha inputDateSingle" placeholder="Ingrese el número de lote maestro" value="<?php echo e($lote->fecha_vencimiento); ?>">

                <div class="invalid-feedback text-right contMessage_fecha"></div>
            </div>
        </div>
        
    </form>
    <?php break; ?>


<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/lote/loteEdit.blade.php ENDPATH**/ ?>