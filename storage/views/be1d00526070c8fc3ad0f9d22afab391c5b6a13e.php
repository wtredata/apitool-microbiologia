<table class="table table-striped table-sm text-center dinamicTable SeeIndexAuditoria">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Laboratorio</th>
            <th scope="col">Usuario</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acción</th>
            <th scope="col">Descripción</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $historicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $historico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td style='width:5%'><?php echo e($index+1); ?></td>
            <td style='width:15%'><?php echo e($historico->num_laboratorio); ?></td>
            <td style='width:10%'><?php echo e($historico->usuario); ?></td>
            <td style='width:10%'><?php echo e(date_format(date_create($historico->fecha), "F d, Y H:i:s")); ?></td>
            <td style='width:10%'><?php echo e($historico->nom_titulo); ?></td>
            <td style='width:50%'>
                <textarea class='textarea-log' readonly='true'><?php echo e($historico->descripcion); ?></textarea>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH /var/www/html/resources/views/auditoria/auditoriaIndex.blade.php ENDPATH**/ ?>