<div class="modal SeeSectionAnalitoLaboratorio" tabindex="-1" id='analito-laboratorio-modal'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary font-weight-bold">
                <p class="heading lead m-0 text-white">Analitos de <?php echo e($control_laboratorio->cod_lote); ?> - <?php echo e($control_laboratorio->nom_control); ?> - <?php echo e($control_laboratorio->fecha_vencimiento); ?></p>
                <button class="btnEvent close" data-event='click' data-route='CancelModal' data-preguntaantes="false"
                    data-modalselected='#analito-laboratorio-modal'>
                    <span aria-hidden="true" class='text-white'>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row pt-2">
                    <div class="col-sm-12 col-lg-3 mb-2">
                        <?php echo $__env->make("analitoLaboratorio.analitoLaboratorioCreate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <div class="col-sm-12 col-lg-9 mb-2 border-left overflow-auto Cont_Table_AnalitoLaboratorio">
                        <?php echo $__env->make("analitoLaboratorio.analitoLaboratorioIndex", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-sm btnEvent" data-event='click' data-route='CancelModal'
                    data-modalselected='#analito-laboratorio-modal' data-preguntaantes="false">Cerrar</button>
            </div>


        </div>
    </div>
</div><?php /**PATH /var/www/html/resources/views/analitoLaboratorio/analitoLaboratorioSection.blade.php ENDPATH**/ ?>