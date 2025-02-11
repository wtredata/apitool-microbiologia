<tr>
    <th scope='col' style="width:8%" class='font-weight-bold'>#</th>
    <th scope='col' style="width:8%" class='font-weight-bold'>Usuario</th>
    <th scope='col' style="width:18%" class='font-weight-bold'>Fecha</th>

    <?php for($nivel=1; $nivel<=$num_niveles; $nivel++): ?> 
        <th scope='col' style="width:<?php echo e((58/$num_niveles)); ?>%" class='font-weight-bold'>Concentración nivel <?php echo e($nivel); ?> </th>
    <?php endfor; ?>

    <?php if(($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3) && !$lote_caducado): ?>
    <th scope='col' style="width:8%" class='font-weight-bold'>Acciones</th>
    <?php endif; ?>
</tr><?php /**PATH /var/www/html/resources/views/resultadosLaboratorio/titleResultadosLaboratorioIndex.blade.php ENDPATH**/ ?>