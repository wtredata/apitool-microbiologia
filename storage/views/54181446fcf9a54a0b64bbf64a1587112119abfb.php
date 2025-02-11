<table class="table table-striped table-sm text-center dinamicTable SeeIndexLaboratorio">
    <thead>
        <tr>
            <th scope="col">Iniciales</th>
            <th scope="col">Usuario</th>
            <th scope="col">Rol</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Laboratorios</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody> 
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><span class="icono-perfil-resultado" style="background:#<?php echo e($usuario->color_hexadecimal); ?>" title='<?php echo e($usuario->nombres); ?> <?php echo e($usuario->apellidos); ?>'><?php echo e($usuario->iniciales); ?></span></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Usuario" data-field="nom_usuario" data-reference="<?php echo e($usuario->id_usuario); ?>"><?php echo e($usuario->nom_usuario); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Usuario" data-field="rol" data-reference="<?php echo e($usuario->id_usuario); ?>"><?php echo e($usuario->nom_rol); ?></td>
            <td>
                <svg class="align-middle btnEvent" title='Actualización de contraseña para el usuario <?php echo e($usuario->nom_usuario); ?>' data-route="DinamicModal_ActualizacionPass" data-event="click" data-reference="<?php echo e($usuario->id_usuario); ?>" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3"></path><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            </td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Usuario" data-field="nombres" data-reference="<?php echo e($usuario->id_usuario); ?>"><?php echo e($usuario->nombres); ?></td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Usuario" data-field="apellidos" data-reference="<?php echo e($usuario->id_usuario); ?>"><?php echo e($usuario->apellidos); ?></td> 
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Usuario" data-field="correo" data-reference="<?php echo e($usuario->id_usuario); ?>"><?php echo e($usuario->correo); ?></td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class='align-middle btnEvent' title='Permitir la asignación de laboratorios a usuario' data-route="DinamicModal_AsignacionUsuario" data-event="click" data-reference="<?php echo e($usuario->id_usuario); ?>" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
            </td>
            <td>
                <?php if($usuario->usuario_estado == 1): ?>
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el usuario <?php echo e($usuario->nom_usuario); ?>" data-route="ChangeStatus_Usuario" data-tables_liged="Usuario" data-event="click" data-reference="<?php echo e($usuario->id_usuario); ?>" data-nom="<?php echo e($usuario->nom_usuario); ?>" data-estado="inactivo">Activo</button>
                <?php else: ?>
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar el usuario <?php echo e($usuario->nom_usuario); ?>" data-route="ChangeStatus_Usuario" data-tables_liged="Usuario" data-event="click" data-reference="<?php echo e($usuario->id_usuario); ?>" data-nom="<?php echo e($usuario->nom_usuario); ?>" data-estado="activo">Inactivo</button>
                <?php endif; ?>
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar el usuario <?php echo e($usuario->nom_usuario); ?>" data-route="Destroy_Usuario" data-event="click" data-reference="<?php echo e($usuario->id_usuario); ?>" data-nom="<?php echo e($usuario->nom_usuario); ?>" data-tables_liged="Usuario" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/html/resources/views/usuario/usuarioIndex.blade.php ENDPATH**/ ?>