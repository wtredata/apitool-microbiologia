<div class="modal SeeSectionCepa" tabindex="-1" id='tincion-modal'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary font-weight-bold">
                <p class="heading lead m-0 text-white">Configuración de cepas</p>
                <button class="btnEvent close" data-event='click' data-route='CancelModal' data-preguntaantes="false"
                    data-modalselected='#tincion-modal'>
                    <span aria-hidden="true" class='text-white'>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row pt-2">
                <div class="col-sm-12 col-lg-4 mb-2">
                        @include("cepa.cepaAsociacion2")
                    </div>

                    <div class="col-sm-12 col-lg-8 mb-2 border-left overflow-auto Cont_Table_ControlLaboratorio">
                        @include("cepa.cepaIndex")
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-sm btnEvent" data-event='click' data-route='CancelModal'
                    data-modalselected='#tincion-modal' data-preguntaantes="false">Cerrar</button>
            </div>
        </div>
    </div>
</div>