<table class="table table-striped table-sm text-center dinamicTable SeeIndexAnalito">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Asignación</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $analitos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $analito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Analito" data-field="codigo" data-reference="<?php echo e($analito->id_analito); ?>"><?php echo e($analito->cod_analito); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Analito" data-field="nombre" data-reference="<?php echo e($analito->id_analito); ?>"><?php echo e($analito->nom_analito); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Analito" data-field="cualitativo" data-reference="<?php echo e($analito->id_analito); ?>">
                <?php if($analito->cualitativo == 1): ?>
                    <span class="font-weight-bold text-primary">Cualitativo</span>
                <?php else: ?>
                   <span class="">Cuantitativo</span>
                <?php endif; ?>
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class='align-middle btnEvent' title='Permitir la asignación de metodologías, unidades y temperaturas' data-route="DinamicModal_AsignacionAnalito" data-event="click" data-reference="<?php echo e($analito->id_analito); ?>" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
            </td>
            <td>
                <?php if($analito->estado == 1): ?>
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el analito <?php echo e($analito->nom_analito); ?>" data-route="ChangeStatus_Analito" data-tables_liged="Analito" data-event="click" data-reference="<?php echo e($analito->id_analito); ?>" data-nom="<?php echo e($analito->nom_analito); ?>" data-estado="inactivo">Activo</button>
                <?php else: ?>
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar el analito <?php echo e($analito->nom_analito); ?>" data-route="ChangeStatus_Analito" data-tables_liged="Analito" data-event="click" data-reference="<?php echo e($analito->id_analito); ?>" data-nom="<?php echo e($analito->nom_analito); ?>" data-estado="activo">Inactivo</button>
                <?php endif; ?>
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar el analito <?php echo e($analito->nom_analito); ?>" data-route="Destroy_Analito" data-event="click" data-reference="<?php echo e($analito->id_analito); ?>" data-nom="<?php echo e($analito->nom_analito); ?>" data-tables_liged="Analito" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/html/resources/views/analito/analitoIndex.blade.php ENDPATH**/ ?>