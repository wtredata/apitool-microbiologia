<table class="table table-striped table-sm text-center dinamicTable SeeIndexLaboratorio">
    <thead>
    <tr>
        <th scope="col">Sede</th>
        <th scope="col">Número</th>
        <th scope="col">Descripción</th>
        <th scope="col">Tipo</th>
        <th scope="col">Estado</th>
        <th scope="col">Eliminar</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $laboratorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laboratorio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Laboratorio" data-field="sede"
                data-reference="<?php echo e($laboratorio->id_laboratorio); ?>"><?php echo $laboratorio->nom_institucion . " " . $laboratorio->nom_sede; ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Laboratorio" data-field="num_laboratorio"
                data-reference="<?php echo e($laboratorio->id_laboratorio); ?>"><?php echo e($laboratorio->num_laboratorio); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Laboratorio" data-field="nom_laboratorio"
                data-reference="<?php echo e($laboratorio->id_laboratorio); ?>"><?php echo e($laboratorio->nom_laboratorio); ?></td>

            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Laboratorio" data-field="tipo"
                data-reference="<?php echo e($laboratorio->id_laboratorio); ?>">
                <?php if($laboratorio->principal == 1): ?>
                    <span class="font-weight-bold text-primary">Principal</span>
                <?php else: ?>
                    <span class="">Secundario</span>
                <?php endif; ?>
            </td>

            <td>
                <?php if($laboratorio->laboratorio_estado == 1): ?>
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1"
                            title="Inactivar el número de laboratorio <?php echo e($laboratorio->num_laboratorio); ?>"
                            data-route="ChangeStatus_Laboratorio" data-tables_liged="Laboratorio"
                            data-objjson='{"id": "laboratorio_sede_reference"}' data-event="click"
                            data-reference="<?php echo e($laboratorio->id_laboratorio); ?>"
                            data-nom="<?php echo e($laboratorio->num_laboratorio); ?>" data-estado="inactivo">Activo
                    </button>
                <?php else: ?>
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1"
                            title="Inactivar el número de laboratorio <?php echo e($laboratorio->num_laboratorio); ?>"
                            data-route="ChangeStatus_Laboratorio" data-tables_liged="Laboratorio"
                            data-objjson='{"id": "laboratorio_sede_reference"}' data-event="click"
                            data-reference="<?php echo e($laboratorio->id_laboratorio); ?>"
                            data-nom="<?php echo e($laboratorio->num_laboratorio); ?>" data-estado="activo">Inactivo
                    </button>
                <?php endif; ?>
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent"
                     title="Eliminar el número de laboratorio <?php echo e($laboratorio->num_laboratorio); ?>"
                     data-route="Destroy_Laboratorio" data-event="click"
                     data-reference="<?php echo e($laboratorio->id_laboratorio); ?>" data-nom="<?php echo e($laboratorio->num_laboratorio); ?>"
                     data-tables_liged="Laboratorio" data-objjson='{"id": "laboratorio_sede_reference"}' width="16"
                     height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                </svg>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /var/www/html/resources/views/laboratorio/laboratorioIndex.blade.php ENDPATH**/ ?>