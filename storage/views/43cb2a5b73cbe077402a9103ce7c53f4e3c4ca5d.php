<option value="">Sin temperatura</option>

<?php $__currentLoopData = $temperaturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temperatura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($temperatura->id_temperatura); ?>"><?php echo e($temperatura->nom_temperatura); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/resources/views/temperatura/temperaturaList.blade.php ENDPATH**/ ?>