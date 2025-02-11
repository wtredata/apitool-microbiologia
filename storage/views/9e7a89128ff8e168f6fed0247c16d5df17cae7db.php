<option value="">Seleccione una unidad...</option>

<?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <option value="<?php echo e($unidad->id_unidad); ?>"><?php echo e($unidad->nom_unidad); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/resources/views/unidad/unidadList.blade.php ENDPATH**/ ?>