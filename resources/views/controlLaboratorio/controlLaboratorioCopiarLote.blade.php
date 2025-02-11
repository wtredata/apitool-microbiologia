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
                
                @csrf

                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <label for="lote_origen" class='font-weight-bold'>Lote actual</label>
                                <select name="lote_origen" class='form-control lote_origen mb-2 disabled bg-light'>
                                    <option value="{{ $control_laboratorio->id_control_laboratorio }}">{{ $control_laboratorio->cod_lote }}  | {{ $control_laboratorio->nom_control }} | {{ $control_laboratorio->fecha_vencimiento }} | {{ $control_laboratorio->nom_matriz }}</option>
                                </select>
                                <div class="contMessage contMessage_lote_origen"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="lote_nuevo" class='font-weight-bold'>Lote nuevo</label>
                                <select name="lote_nuevo" class='form-control lote_nuevo' id='lote_nuevo_copiado_lote'>
                                    @foreach($lotes_mismo_control as $lote)
                                        <option value="{{ $lote->id_lote }}">{{ $lote->cod_lote }} | {{ $lote->nom_control }} | {{ $lote->fecha_vencimiento }} | {{ $lote->nom_matriz }}</option>
                                    @endforeach
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
