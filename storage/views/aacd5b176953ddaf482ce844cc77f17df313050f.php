<?php switch($campo):

    case ("codigo"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Analito&&&Update_Analito" data-field="codigo&&&codigo" data-action_save="true&&&true" data-reference="<?php echo e($analito->id_analito); ?>&&&<?php echo e($analito->id_analito); ?>">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Analito" data-field="codigo" data-reference="<?php echo e($analito->id_analito); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Analito" data-field="codigo" data-reference="<?php echo e($analito->id_analito); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="codigo" class="form-control codigo" value="<?php echo e($analito->cod_analito); ?>">

            <div class="invalid-feedback text-right contMessage_codigo"></div>
        </div>
    </form>
    <?php break; ?>


    <?php case ("nombre"): ?>
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Analito&&&Update_Analito" data-field="nombre&&&nombre" data-action_save="true&&&true" data-reference="<?php echo e($analito->id_analito); ?>&&&<?php echo e($analito->id_analito); ?>">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Analito" data-field="nombre" data-reference="<?php echo e($analito->id_analito); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Analito" data-field="nombre" data-reference="<?php echo e($analito->id_analito); ?>" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nombre" class="form-control nombre" value="<?php echo e($analito->nom_analito); ?>">

            <div class="invalid-feedback text-right contMessage_nombre"></div>
        </div>
    </form>
    <?php break; ?>


    <?php case ("cualitativo"): ?>
    <form class="formEvent form-row exceptionSelect2" data-event="submit&&&keyup" data-route="Update_Analito&&&Update_Analito" data-field="cualitativo&&&cualitativo" data-action_save="true&&&true" data-reference="<?php echo e($analito->id_analito); ?>&&&<?php echo e($analito->id_analito); ?>">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Analito" data-field="cualitativo" data-reference="<?php echo e($analito->id_analito); ?>" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Analito" data-field="cualitativo" data-reference="<?php echo e($analito->id_analito); ?>" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select data-isselect2='true' name="cualitativo" class="form-control cualitativo">
                    <option value="0">Cuantitativo</option>
                    <option value="1">Cualitativo</option>
                </select>

                <div class="invalid-feedback text-right contMessage_cualitativo"></div>
            </div>
        </div>
        
    </form>
    <?php break; ?>

<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/analito/analitoEdit.blade.php ENDPATH**/ ?>