<?php switch($campo):
    case ("institucion"): ?>
    <form class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="institucion&&&institucion" data-action_save="true&&&true" data-reference="<?php echo e($sede->id_sede); ?>&&&<?php echo e($sede->id_sede); ?>">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="institucion" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="institucion" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select name="institucion" class="form-control form-control-sm institucion" data-isselect2='true'>
                    <option value="">Seleccione una institución...</option>
                    <?php $__currentLoopData = $instituciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($sede->institucion_id_institucion == $institucion->id_institucion): ?>
                            <option value="<?php echo e($institucion->id_institucion); ?>" selected><?php echo e($institucion->nom_institucion); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($institucion->id_institucion); ?>"><?php echo e($institucion->nom_institucion); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <div class="invalid-feedback text-right contMessage_institucion"></div>
            </div>
        </div>
        
    </form>
    <?php break; ?>


    <?php case ("ciudad"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="ciudad&&&ciudad" data-action_save="true&&&true" data-reference="<?php echo e($sede->id_sede); ?>&&&<?php echo e($sede->id_sede); ?>">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="ciudad" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="ciudad" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>


            <select name="ciudad" class="form-control form-control-sm ciudad" data-isselect2='true'>
                <option value="">Seleccione una ciudad...</option>
                <?php $__currentLoopData = $ciudades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($sede->ciudad_id_ciudad == $ciudad->id_ciudad): ?>
                        <option value="<?php echo e($ciudad->id_ciudad); ?>" selected><?php echo $ciudad->nom_pais . " " . $ciudad->nom_ciudad; ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($ciudad->id_ciudad); ?>"><?php echo $ciudad->nom_pais . " " . $ciudad->nom_ciudad; ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <div class="invalid-feedback text-right contMessage_ciudad"></div>
        </div>
    </form>
    <?php break; ?>

    <?php case ("nombre"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="nombre&&&nombre" data-action_save="true&&&true" data-reference="<?php echo e($sede->id_sede); ?>&&&<?php echo e($sede->id_sede); ?>">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="nombre" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="nombre" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nombre" class="form-control nombre" value="<?php echo e($sede->nom_sede); ?>">

            <div class="invalid-feedback text-right contMessage_nombre"></div>
        </div>
    </form>
    <?php break; ?>


    <?php case ("nom_contacto"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="nom_contacto&&&nom_contacto" data-action_save="true&&&true" data-reference="<?php echo e($sede->id_sede); ?>&&&<?php echo e($sede->id_sede); ?>">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="nom_contacto" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="nom_contacto" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nom_contacto" class="form-control nom_contacto" value="<?php echo e($sede->nom_contacto); ?>">

            <div class="invalid-feedback text-right contMessage_nom_contacto"></div>
        </div>
    </form>
    <?php break; ?>


    <?php case ("tel_contacto"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="tel_contacto&&&tel_contacto" data-action_save="true&&&true" data-reference="<?php echo e($sede->id_sede); ?>&&&<?php echo e($sede->id_sede); ?>">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="tel_contacto" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="tel_contacto" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="tel_contacto" class="form-control tel_contacto" value="<?php echo e($sede->tel_contacto); ?>">

            <div class="invalid-feedback text-right contMessage_tel_contacto"></div>
        </div>
    </form>
    <?php break; ?>


    <?php case ("correo_contacto"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="correo_contacto&&&correo_contacto" data-action_save="true&&&true" data-reference="<?php echo e($sede->id_sede); ?>&&&<?php echo e($sede->id_sede); ?>">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="correo_contacto" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="correo_contacto" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="correo_contacto" class="form-control correo_contacto" value="<?php echo e($sede->correo_contacto); ?>">

            <div class="invalid-feedback text-right contMessage_correo_contacto"></div>
        </div>
    </form>
    <?php break; ?>


    <?php case ("direccion"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="direccion&&&direccion" data-action_save="true&&&true" data-reference="<?php echo e($sede->id_sede); ?>&&&<?php echo e($sede->id_sede); ?>">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="direccion" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="direccion" data-reference="<?php echo e($sede->id_sede); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="direccion" class="form-control direccion" value="<?php echo e($sede->direccion); ?>">

            <div class="invalid-feedback text-right contMessage_direccion"></div>
        </div>
    </form>
    <?php break; ?>

<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/sede/sedeEdit.blade.php ENDPATH**/ ?>