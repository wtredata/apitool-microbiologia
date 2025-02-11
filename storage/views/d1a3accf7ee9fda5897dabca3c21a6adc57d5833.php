<form class="form formEvent formCreate" data-route="Store_ControlLaboratorio" data-event="submit"
    data-tables_liged="ControlLaboratorio" data-objjson='{"id_reference": "control_lab_laboratorio"}'
    data-fancyliged='tree_resultados'>

    <?php echo csrf_field(); ?>

    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="form-label font-weight-bold" for="control_lab_laboratorio">Laboratorio</label>
                <select id="control_lab_laboratorio" class='form-control form-control-lg laboratorio'
                    name='laboratorio'>
                    <option value='<?php echo e($laboratorio->id_laboratorio); ?>' selected><?php echo e($laboratorio->num_laboratorio); ?> -
                        <?php echo e($laboratorio->nom_laboratorio); ?></option>
                </select>
            </div>
            <div class="col-12 contMessage contMessage_laboratorio"></div>
        </div>


    </div>

    <div class="form-outline mb-4">
        <div class="row">
            <div class="col-12">
                <label class="form-label font-weight-bold" for="control_lab_lote">Lote</label>
                <select id="control_lab_lote" class='form-control lote' name='lote'></select>
            </div>
            <div class="col-12 contMessage contMessage_lote"></div>
        </div>

    </div>

    <div class="form-outline mb-4">
        <button type="submit" class="btn btn-sm btn-primary ml-0 mr-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle mr-1">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
            <span class='text'>Agregar lote</span>
        </button>
    </div>
</form><?php /**PATH /var/www/html/resources/views/controlLaboratorio/controlLaboratorioCreate.blade.php ENDPATH**/ ?>