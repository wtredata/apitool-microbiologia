<div class="row SeeSectionCiudad m-0 mt-4">

    <div class="col-lg-4">
        <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">Registro de ciudad</h6>
            </div>
            <div class="card-body">
                <?php echo $__env->make("ciudad.ciudadCreate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card shadow mb-4 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">Lista de ciudades</h6>
            </div>
            <div class="card-body">
                <div class="Cont_Table_Ciudad overflow-auto">
                    <?php echo $__env->make("ciudad.ciudadIndex", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/resources/views/ciudad/ciudadSection.blade.php ENDPATH**/ ?>