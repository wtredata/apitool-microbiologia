<?php switch($campo):

case ("analito"): ?>
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_AnalitoLaboratorio&&&Update_AnalitoLaboratorio" data-field="analito&&&analito"
    data-action_save="true&&&true"
    data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>&&&<?php echo e($analito_laboratorio->id_analito_lab); ?>"
>

    <div class="col-12">
        <div class="input-group">

            <select name="analito" class="form-control analito" id='analito_laboratorio_edit_analito' data-isselect2='true'
                data-modulo_select2="AnalitoLaboratorio"></select>

            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="analito" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="analito" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_analito"></div>
    </div>

</form>
<?php break; ?>


<?php case ("analizador"): ?>
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_AnalitoLaboratorio&&&Update_AnalitoLaboratorio" data-field="analizador&&&analizador"
    data-action_save="true&&&true"
    data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>&&&<?php echo e($analito_laboratorio->id_analito_lab); ?>"
>

    <div class="col-12">
        <div class="input-group">

            <select name="analizador" class="form-control analizador" id='analito_laboratorio_edit_analizador' data-isselect2='true'
                data-modulo_select2="Analizador"></select>

            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="analizador" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="analizador" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_analizador"></div>
    </div>

</form>
<?php break; ?>


<?php case ("reactivo"): ?>
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_AnalitoLaboratorio&&&Update_AnalitoLaboratorio" data-field="reactivo&&&reactivo"
    data-action_save="true&&&true"
    data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>&&&<?php echo e($analito_laboratorio->id_analito_lab); ?>"
>

    <div class="col-12">
        <div class="input-group">

            <select name="reactivo" class="form-control reactivo" id='analito_laboratorio_edit_reactivo' data-isselect2='true'
                data-modulo_select2="Reactivo"></select>

            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="reactivo" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="reactivo" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_reactivo"></div>
    </div>

</form>
<?php break; ?>


<?php case ("gen_vitros"): ?>
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_AnalitoLaboratorio&&&Update_AnalitoLaboratorio" data-field="gen_vitros&&&gen_vitros"
    data-action_save="true&&&true"
    data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>&&&<?php echo e($analito_laboratorio->id_analito_lab); ?>"
>

    <div class="col-12">
        <div class="input-group">

            <input type="number" name="gen_vitros" class="form-control gen_vitros" value='<?php echo e($analito_laboratorio->generacion_reactivo); ?>'>

            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="gen_vitros" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="gen_vitros" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_gen_vitros"></div>
    </div>

</form>
<?php break; ?>


<?php case ("metodologia"): ?>
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_AnalitoLaboratorio&&&Update_AnalitoLaboratorio" data-field="metodologia&&&metodologia"
    data-action_save="true&&&true"
    data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>&&&<?php echo e($analito_laboratorio->id_analito_lab); ?>"
>

    <div class="col-12">
        <div class="input-group">
            <select name="metodologia" class="form-control metodologia" id='analito_laboratorio_edit_metodologia' data-isselect2='true'>
                <option value="" disabled>Seleccione una metodologia...</option>
                <?php $__currentLoopData = $metodologias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metodologia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($metodologia->id_metodo); ?>"><?php echo e($metodologia->nom_metodo); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="metodologia" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="metodologia" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_metodologia"></div>
    </div>

</form>
<?php break; ?>


<?php case ("unidades"): ?>
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_AnalitoLaboratorio&&&Update_AnalitoLaboratorio" data-field="unidades&&&unidades"
    data-action_save="true&&&true"
    data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>&&&<?php echo e($analito_laboratorio->id_analito_lab); ?>"
>

    <div class="col-12">
        <div class="input-group">
            <select name="unidades" class="form-control unidades" id='analito_laboratorio_edit_unidades' data-isselect2='true'>
                <option value="" disabled>Seleccione un unidad...</option>
                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($unidad->id_unidad); ?>"><?php echo e($unidad->nom_unidad); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="unidades" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="unidades" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_unidades"></div>
    </div>

</form>
<?php break; ?>


<?php case ("temperatura"): ?>
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_AnalitoLaboratorio&&&Update_AnalitoLaboratorio" data-field="temperatura&&&temperatura"
    data-action_save="true&&&true"
    data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>&&&<?php echo e($analito_laboratorio->id_analito_lab); ?>"
>

    <div class="col-12">
        <div class="input-group">
            <select name="temperatura" class="form-control temperatura" id='analito_laboratorio_edit_temperatura' data-isselect2='true'>
                <option value="">Sin temperatura</option>

                <?php $__currentLoopData = $temperaturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temperatura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($temperatura->id_temperatura); ?>"><?php echo e($temperatura->nom_temperatura); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="temperatura" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_AnalitoLaboratorio"
                        data-field="temperatura" data-fancyliged='tree_resultados' data-reference="<?php echo e($analito_laboratorio->id_analito_lab); ?>"
                        data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_temperatura"></div>
    </div>

</form>
<?php break; ?>


<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/analitoLaboratorio/analitoLaboratorioEdit.blade.php ENDPATH**/ ?>