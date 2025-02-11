<table class="table table-striped table-sm text-center dinamicTable SeeIndexControlLaboratorio">
    <thead>
        <tr>
            <th class='font-weight-bolder' scope='col'>Número de lote</th>
            <th class='font-weight-bolder' scope='col'>Control</th>
            <th class='font-weight-bolder' scope='col'>Matriz</th>
            <th class='font-weight-bolder' scope='col'>Niveles</th>
            <th class='font-weight-bolder' scope='col'>Fecha de caducidad</th>
            <th class='font-weight-bolder' scope='col'>Estado</th>
            <th class='font-weight-bolder' scope='col'>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $lotes_laboratorio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lote_laboratorio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_ControlLaboratorio" data-field="lote"
                data-tables_liged="ControlLaboratorio" data-reference="<?php echo e($lote_laboratorio->id_control_laboratorio); ?>"><?php echo e($lote_laboratorio->cod_lote); ?></td>
            <td><?php echo e($lote_laboratorio->nom_control); ?></td>
            <td><?php echo e($lote_laboratorio->nom_matriz); ?></td>
            <td><?php echo e($lote_laboratorio->num_niveles); ?></td>
            <td><?php echo e($lote_laboratorio->fecha_vencimiento); ?></td>
            <td>
                <?php if($lote_laboratorio->estado_control_laboratorio == 1): ?>
                <button type="button" class="btn btn-sm btnEvent shadow-none m-0 py-1 px-2 btn-success"
                    data-event='click' data-route='ChangeStatus_ControlLaboratorio'
                    data-tables_liged="ControlLaboratorio" data-fancyliged='tree_resultados'
                    data-reference="<?php echo e($lote_laboratorio->id_control_laboratorio); ?>"
                    data-nom="<?php echo e($lote_laboratorio->cod_lote); ?>"
                    data-objjson='{"id_reference": "control_lab_laboratorio"}' data-estado="Cerrado"
                    title="Clic para cerrar el lote">Abierto</button>
                <?php else: ?>
                <button type="button" class="btn btn-sm btnEvent shadow-none m-0 py-1 px-2 btn-danger"
                    data-event='click' data-route='ChangeStatus_ControlLaboratorio'
                    data-tables_liged="ControlLaboratorio" data-fancyliged='tree_resultados'
                    data-reference="<?php echo e($lote_laboratorio->id_control_laboratorio); ?>"
                    data-nom="<?php echo e($lote_laboratorio->cod_lote); ?>"
                    data-objjson='{"id_reference": "control_lab_laboratorio"}' data-estado="Abierto"
                    title='Clic para abrir el lote'>Cerrado</button>
                <?php endif; ?>
            </td>
            <td class="table-action">
                <a href="#" class='btnEvent' data-event='click' data-route='Destroy_ControlLaboratorio'
                    data-tables_liged="ControlLaboratorio" data-fancyliged='tree_resultados'
                    data-reference="<?php echo e($lote_laboratorio->id_control_laboratorio); ?>"
                    data-nom="<?php echo e($lote_laboratorio->cod_lote); ?>"
                    data-objjson='{"id_reference": "control_lab_laboratorio"}'
                    title='Eliminar el lote para el laboratorio especificado'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-trash align-middle">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                        </path>
                    </svg>
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table><?php /**PATH /var/www/html/resources/views/controlLaboratorio/controlLaboratorioIndex.blade.php ENDPATH**/ ?>