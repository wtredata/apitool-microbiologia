<div class="modal SeeSectionUsuarioAsignacion" tabindex="-1" id='copiar-lote-modal'>
    <div class="modal-dialog" style='max-width: 600px !important;'>

        <div class="modal-content">
            <div class="modal-header bg-primary font-weight-bold">
                <p class="heading lead m-0 text-white">Copiar lote</p>
                <button class="btnEvent close" data-event='click' data-route='CancelModal' data-preguntaantes="false"
                    data-modalselected='#copiar-lote-modal'>
                    <span aria-hidden="true" class='text-white'>&times;</span>
                </button>
            </div>

            <form class="form formEvent formCreate" data-route="Store_CopiarLote" data-event="submit" data-close_modal='true' data-fancyliged='tree_resultados' data-fancydirection='parent'>
                
                <?php echo csrf_field(); ?>

                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <label for="lote_origen" class='font-weight-bold'>Lote actual</label>
                                <select name="lote_origen" class='form-control lote_origen mb-2 disabled bg-light'>
                                    <option value="<?php echo e($control_laboratorio->id_control_laboratorio); ?>"><?php echo e($control_laboratorio->cod_lote); ?>  | <?php echo e($control_laboratorio->nom_control); ?> | <?php echo e($control_laboratorio->fecha_vencimiento); ?> | <?php echo e($control_laboratorio->nom_matriz); ?></option>
                                </select>
                                <div class="contMessage contMessage_lote_origen"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="lote_nuevo" class='font-weight-bold'>Lote nuevo</label>
                                <select name="lote_nuevo" class='form-control lote_nuevo' id='lote_nuevo_copiado_lote'>
                                    <?php $__currentLoopData = $lotes_mismo_control; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($lote->id_lote); ?>"><?php echo e($lote->cod_lote); ?> | <?php echo e($lote->nom_control); ?> | <?php echo e($lote->fecha_vencimiento); ?> | <?php echo e($lote->nom_matriz); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="contMessage contMessage_lote_nuevo"></div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button class='btn btn-light btn-sm ml-0 btnEvent' data-event='click' data-route='CancelModal' data-preguntaantes="false" data-modalselected='#copiar-lote-modal'>Cancelar</button>
                    <button type="submit" class='btn btn-primary btn-sm ml-0'>Actualizar</button>
                </div>

            </form>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/controlLaboratorio/controlLaboratorioCopiarLote.blade.php ENDPATH**/ ?>