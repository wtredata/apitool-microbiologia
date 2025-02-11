<table class="table table-striped table-sm text-center dinamicTable SeeIndexSede">
    <thead>
        <tr>
            <th scope="col">Institución</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Nombre sede</th>
            <th scope="col">Contacto</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Dirección</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $sedes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sede): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Sede" data-field="institucion" data-reference="<?php echo e($sede->id_sede); ?>"><?php echo e($sede->nom_institucion); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Sede" data-field="ciudad" data-reference="<?php echo e($sede->id_sede); ?>"><?php echo e($sede->nom_ciudad); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Sede" data-field="nombre" data-reference="<?php echo e($sede->id_sede); ?>"><?php echo e($sede->nom_sede); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Sede" data-field="nom_contacto" data-reference="<?php echo e($sede->id_sede); ?>"><?php echo e($sede->nom_contacto); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Sede" data-field="tel_contacto" data-reference="<?php echo e($sede->id_sede); ?>"><?php echo e($sede->tel_contacto); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Sede" data-field="correo_contacto" data-reference="<?php echo e($sede->id_sede); ?>"><?php echo e($sede->correo_contacto); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Sede" data-field="direccion" data-reference="<?php echo e($sede->id_sede); ?>"><?php echo e($sede->direccion); ?></td>
            <td>
                <?php if($sede->sede_estado == 1): ?>
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar la sede <?php echo e($sede->nom_sede); ?>" data-route="ChangeStatus_Sede" data-tables_liged="Sede" data-objjson='{"id": "sede_institucion_reference"}' data-event="click" data-reference="<?php echo e($sede->id_sede); ?>" data-nom="<?php echo e($sede->nom_sede); ?>" data-estado="inactivo">Activo</button>
                <?php else: ?>
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar la sede <?php echo e($sede->nom_sede); ?>" data-route="ChangeStatus_Sede" data-tables_liged="Sede" data-objjson='{"id": "sede_institucion_reference"}' data-event="click" data-reference="<?php echo e($sede->id_sede); ?>" data-nom="<?php echo e($sede->nom_sede); ?>" data-estado="activo">Inactivo</button>
                <?php endif; ?>
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar la sede <?php echo e($sede->nom_sede); ?>" data-route="Destroy_Sede" data-event="click" data-reference="<?php echo e($sede->id_sede); ?>" data-nom="<?php echo e($sede->nom_sede); ?>" data-tables_liged="Sede" data-objjson='{"id": "sede_institucion_reference"}' width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/html/resources/views/sede/sedeIndex.blade.php ENDPATH**/ ?>