<table class="table table-striped table-sm text-center dinamicTable SeeIndexTemperatura">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Código</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $temperaturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temperatura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Temperatura" data-field="nombre" data-reference="<?php echo e($temperatura->id_temperatura); ?>"><?php echo e($temperatura->nom_temperatura); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Temperatura" data-field="codigo" data-reference="<?php echo e($temperatura->id_temperatura); ?>"><?php echo e($temperatura->cod_temperatura); ?></td>
            <td>
                <?php if($temperatura->estado == 1): ?>
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el temperatura <?php echo e($temperatura->nom_temperatura); ?>" data-route="ChangeStatus_Temperatura" data-tables_liged="Temperatura" data-event="click" data-reference="<?php echo e($temperatura->id_temperatura); ?>" data-nom="<?php echo e($temperatura->nom_temperatura); ?>" data-estado="inactivo">Activo</button>
                <?php else: ?>
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar el temperatura <?php echo e($temperatura->nom_temperatura); ?>" data-route="ChangeStatus_Temperatura" data-tables_liged="Temperatura" data-event="click" data-reference="<?php echo e($temperatura->id_temperatura); ?>" data-nom="<?php echo e($temperatura->nom_temperatura); ?>" data-estado="activo">Inactivo</button>
                <?php endif; ?>
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar el temperatura <?php echo e($temperatura->nom_temperatura); ?>" data-route="Destroy_Temperatura" data-event="click" data-reference="<?php echo e($temperatura->id_temperatura); ?>" data-nom="<?php echo e($temperatura->nom_temperatura); ?>" data-tables_liged="Temperatura" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/html/resources/views/temperatura/temperaturaIndex.blade.php ENDPATH**/ ?>