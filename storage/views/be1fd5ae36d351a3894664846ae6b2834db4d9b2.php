<table class="table table-striped table-sm text-center dinamicTable SeeIndexFuenteETMP">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $fuentesETMP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuente_etmp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_FuenteETMP" data-field="nombre" data-reference="<?php echo e($fuente_etmp->id_fuente_etmp); ?>"><?php echo e($fuente_etmp->nom_fuente_etmp); ?></td>
            <td>
                <?php if($fuente_etmp->estado == 1): ?>
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar la institución <?php echo e($fuente_etmp->nom_fuente_etmp); ?>" data-route="ChangeStatus_FuenteETMP" data-tables_liged="FuenteETMP" data-event="click" data-reference="<?php echo e($fuente_etmp->id_fuente_etmp); ?>" data-nom="<?php echo e($fuente_etmp->nom_fuente_etmp); ?>" data-estado="inactivo">Activo</button>
                <?php else: ?>
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Activar la institución <?php echo e($fuente_etmp->nom_fuente_etmp); ?>" data-route="ChangeStatus_FuenteETMP" data-tables_liged="FuenteETMP" data-event="click" data-reference="<?php echo e($fuente_etmp->id_fuente_etmp); ?>" data-nom="<?php echo e($fuente_etmp->nom_fuente_etmp); ?>" data-estado="inactivo">Inactivo</button>
                <?php endif; ?>
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar la institución <?php echo e($fuente_etmp->nom_fuente_etmp); ?>" data-route="Destroy_FuenteETMP" data-event="click" data-reference="<?php echo e($fuente_etmp->id_fuente_etmp); ?>" data-nom="<?php echo e($fuente_etmp->nom_fuente_etmp); ?>" data-tables_liged="FuenteETMP" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/html/resources/views/fuenteETMP/fuenteETMPIndex.blade.php ENDPATH**/ ?>