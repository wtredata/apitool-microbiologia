<table class="table table-striped table-sm text-center dinamicTable SeeIndexInstitucion">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Constante Z</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $instituciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Institucion" data-field="nombre" data-reference="<?php echo e($institucion->id_institucion); ?>"><?php echo e($institucion->nom_institucion); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Institucion" data-field="constante_z" data-reference="<?php echo e($institucion->id_institucion); ?>"><?php echo e($institucion->constante_z); ?></td>
            <td>
                <?php if($institucion->estado == 1): ?>
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar la institución <?php echo e($institucion->nom_institucion); ?>" data-route="ChangeStatus_Institucion" data-tables_liged="Institucion" data-event="click" data-reference="<?php echo e($institucion->id_institucion); ?>" data-nom="<?php echo e($institucion->nom_institucion); ?>" data-estado="inactivo">Activo</button>
                <?php else: ?>
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Activar la institución <?php echo e($institucion->nom_institucion); ?>" data-route="ChangeStatus_Institucion" data-tables_liged="Institucion" data-event="click" data-reference="<?php echo e($institucion->id_institucion); ?>" data-nom="<?php echo e($institucion->nom_institucion); ?>" data-estado="inactivo">Inactivo</button>
                <?php endif; ?>
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar la institución <?php echo e($institucion->nom_institucion); ?>" data-route="Destroy_Institucion" data-event="click" data-reference="<?php echo e($institucion->id_institucion); ?>" data-nom="<?php echo e($institucion->nom_institucion); ?>" data-tables_liged="Institucion" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /var/www/html/resources/views/institucion/institucionIndex.blade.php ENDPATH**/ ?>