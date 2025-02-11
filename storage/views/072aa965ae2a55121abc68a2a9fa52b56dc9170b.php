<option value="">Seleccione una metodología...</option>

<?php $__currentLoopData = $metodologias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metodologia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <option value="<?php echo e($metodologia->id_metodo); ?>"><?php echo e($metodologia->nom_metodo); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/resources/views/metodologia/metodologiaList.blade.php ENDPATH**/ ?>