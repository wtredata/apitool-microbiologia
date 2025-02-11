<div class="modal SeeSectionUsuarioAsignacion" tabindex="-1" id='usuario-pass-modal'>

    <?php echo csrf_field(); ?>

    <div class="modal-dialog" style='max-width: 600px !important;'>

        <div class="modal-content">
            <div class="modal-header bg-primary font-weight-bold">
                <p class="heading lead m-0 text-white">Actualización de contraseña para <strong><?php echo e($usuario->nom_usuario); ?></strong></p>
                <button class="btnEvent close" data-event='click' data-route='CancelModal' data-preguntaantes="false"
                    data-modalselected='#usuario-pass-modal'>
                    <span aria-hidden="true" class='text-white'>&times;</span>
                </button>
            </div>

            <form class="form formEvent formCreate" data-route="Store_UsuarioPass" data-event="submit" data-close_modal='true'>
                <div class="modal-body">

                    <input type="hidden" value='<?php echo e($usuario->id_usuario); ?>' name='id_usuario' id='usuario_pass_act'>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="password">Contraseña:</label>
                                <input type="password" placeholder="Contraseña temporal" class="form-control password" name="password">
                            </div>
                            <div class="col">
                                <label for="password_confirmation">Confirmación:</label>
                                <input type="password" placeholder="Confirmación de contraseña" class="form-control password_confirmation" name="password_confirmation">
                            </div>
                        </div>
                        <div class="contMessage contMessage_password"></div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class='btn btn-primary btn-sm ml-0'>Actualizar</button>
                </div>

            </form>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/usuario/usuarioPass.blade.php ENDPATH**/ ?>