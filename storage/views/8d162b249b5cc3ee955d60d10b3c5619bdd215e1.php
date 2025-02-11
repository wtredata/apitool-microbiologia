<div class="modal SeeSectionAnalitoAsignacion" tabindex="-1" id='analito-asignacion-modal'>
    <div class="modal-dialog" style='max-width: 600px !important;'>

        <div class="modal-content">
            <div class="modal-header bg-primary font-weight-bold">
                <p class="heading lead m-0 text-white">Asignaciones para <strong><?php echo e($analito->nom_analito); ?></strong></p>
                <button class="btnEvent close" data-event='click' data-route='CancelModal' data-preguntaantes="false"
                    data-modalselected='#analito-asignacion-modal'>
                    <span aria-hidden="true" class='text-white'>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                
                <input type="hidden" value='<?php echo e($analito->id_analito); ?>' id='analito_asignacion_general'>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-metodos-tab" data-toggle="pill" href="#pills-metodos" role="tab" aria-controls="pills-metodos" aria-selected="true">Metodologías</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-unidades-tab" data-toggle="pill" href="#pills-unidades" role="tab" aria-controls="pills-unidades" aria-selected="false">Unidades</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-temperaturas-tab" data-toggle="pill" href="#pills-temperaturas" role="tab" aria-controls="pills-temperaturas" aria-selected="false">Temperaturas</a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-metodos" role="tabpanel" aria-labelledby="pills-metodos-tab">
                        <div class="cont-asignacion overflow-auto">

                            <div class="form-group">
                                <input type="text" class='form-control my-2 btnEvent' data-event='keyup' data-route='FiltrarAsignaciones' placeholder='Filtre mediante el nombre de la metodología'>
                            </div>

                            <div class="groupo-lista-check">
                                <?php $__currentLoopData = $metodologias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metodologia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="custom-control custom-switch">
                                        <input 
                                            type="checkbox" 
                                            class="custom-control-input" 
                                            id="metodologia-<?php echo e($metodologia->id_metodo); ?>" 
                                            <?php if($metodologia->asignado): ?>
                                                checked='checked'
                                            <?php endif; ?>
                                            value="<?php echo e($metodologia->id_metodo); ?>">
                                        <label class="custom-control-label pl-2" for="metodologia-<?php echo e($metodologia->id_metodo); ?>"><?php echo e($metodologia->nom_metodo); ?></label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-unidades" role="tabpanel" aria-labelledby="pills-unidades-tab">
                        <div class="cont-asignacion overflow-auto">

                            <div class="form-group">
                                <input type="text" class='form-control my-2 btnEvent' data-event='keyup' data-route='FiltrarAsignaciones' placeholder='Filtre mediante el nombre de la unidad'>
                            </div>
                            
                            <div class="groupo-lista-check">
                                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="custom-control custom-switch">
                                        <input 
                                            type="checkbox" 
                                            class="custom-control-input" 
                                            id="unidad-<?php echo e($unidad->id_unidad); ?>"
                                            <?php if($unidad->asignado): ?>
                                                checked='checked'
                                            <?php endif; ?> 
                                            value="<?php echo e($unidad->id_unidad); ?>">
                                        <label class="custom-control-label pl-2" for="unidad-<?php echo e($unidad->id_unidad); ?>"><?php echo e($unidad->nom_unidad); ?></label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-temperaturas" role="tabpanel" aria-labelledby="pills-temperaturas-tab">
                        <div class="cont-asignacion overflow-auto">

                            <div class="form-group">
                                <input type="text" class='form-control my-2 btnEvent' data-event='keyup' data-route='FiltrarAsignaciones' placeholder='Filtre mediante el nombre de la temperatura'>
                            </div>
                            
                            <div class="groupo-lista-check">
                                <?php $__currentLoopData = $temperaturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temperatura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="custom-control custom-switch">
                                        <input 
                                            type="checkbox" 
                                            class="custom-control-input" 
                                            id="temperatura-<?php echo e($temperatura->id_temperatura); ?>" 
                                            <?php if($temperatura->asignado): ?>
                                                checked='checked'
                                            <?php endif; ?>
                                            value="<?php echo e($temperatura->id_temperatura); ?>">
                                        <label class="custom-control-label pl-2" for="temperatura-<?php echo e($temperatura->id_temperatura); ?>"><?php echo e($temperatura->nom_temperatura); ?></label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-sm btnEvent" data-event='click' data-route='CancelModal' data-preguntaantes="false" data-modalselected='#analito-asignacion-modal'>Cancelar</button>
                <button type="button" id='btn-guardar-assig-analito' data-nom_analito='<?php echo e($analito->nom_analito); ?>' class="btn btn-primary btn-sm btnEvent" data-close_modal='true' data-event='click' data-route='SaveAsignacion_Analito'>Guardar</button>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/analito/analitoAsignacion.blade.php ENDPATH**/ ?>