<?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($proveedor->id_proveedor); ?>"><?php echo e($proveedor->nom_proveedor); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/resources/views/proveedor/proveedorList.blade.php ENDPATH**/ ?>