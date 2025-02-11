<div class="modal SeeSectionUsuarioAsignacion" tabindex="-1" id='exportar-graficos-integrados-modal'>
    <div class="modal-dialog" style='max-width: 600px !important;'>

        <div class="modal-content">
            <div class="modal-header bg-primary font-weight-bold">
                <p class="heading lead m-0 text-white">Exportar gráficas resultados cualitativos a PDF</p>
                <button class="btnEvent close" data-event='click' data-route='CancelModal' data-preguntaantes="false"
                    data-modalselected='#exportar-graficos-integrados-modal'>
                    <span aria-hidden="true" class='text-white'>&times;</span>
                </button>
            </div>

            <form class="form formEvent formCreate" data-route="Exportar_GraficosCualitativo" data-event="submit" data-close_modal='true'>
                <div class="modal-body cont_exportacion">

                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-12">
                                <label for="lote" class='font-weight-bold'>Lote</label>
                                <select name="lote" class='form-control mb-2 disabled bg-light lote'>
                                    <option value="{{ $control_laboratorio->id_control_laboratorio }}">{{ $control_laboratorio->cod_lote }}  | {{ $control_laboratorio->nom_control }} | {{ $control_laboratorio->fecha_vencimiento }} | {{ $control_laboratorio->nom_matriz }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class='font-weight-bold'>Fecha inicial</label>
                                <input type="date" class="form-control fecha_inicial" value='{{ $fecha_inicial }}' />
                            </div>

                            <div class="col-6">
                                <label class='font-weight-bold'>Fecha final</label>
                                <input type="date" class="form-control fecha_final" value='{{ $fecha_final }}' />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class='btn btn-light btn-sm ml-0 btnEvent' data-event='click' data-route='CancelModal' data-preguntaantes="false" data-modalselected='#exportar-graficos-integrados-modal'>Cancelar</button>
                    <button type="submit" class='btn btn-primary btn-sm ml-0'>Exportar</button>
                </div>

            </form>

        </div>
    </div>
</div>
