<div class="modal SeeSectionUsuarioAsignacion" tabindex="-1" id='usuario-asignacion-modal'>
    <div class="modal-dialog" style='max-width: 600px !important;'>

        <div class="modal-content">
            <div class="modal-header bg-primary font-weight-bold">
                <p class="heading lead m-0 text-white">Asignaciones para <strong>{{ $usuario->nom_usuario }}</strong></p>
                <button class="btnEvent close" data-event='click' data-route='CancelModal' data-preguntaantes="false"
                    data-modalselected='#usuario-asignacion-modal'>
                    <span aria-hidden="true" class='text-white'>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                
                <input type="hidden" value='{{ $usuario->id_usuario }}' id='usuario_asignacion_general'>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-laboratorios-tab" data-toggle="pill" href="#pills-laboratorios" role="tab" aria-controls="pills-laboratorios" aria-selected="true">Laboratorios</a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-laboratorios" role="tabpanel" aria-labelledby="pills-laboratorios-tab">
                        <div class="cont-asignacion overflow-auto">

                            <div class="form-group">
                                <input type="text" class='form-control my-2 btnEvent' data-event='keyup' data-route='FiltrarAsignaciones' placeholder='Filtre mediante el nombre del laboratorio'>
                            </div>

                            <div class="groupo-lista-check">
                                @foreach($laboratorios as $laboratorio)
                                    <div class="custom-control custom-switch">
                                        <input 
                                            type="checkbox" 
                                            class="custom-control-input" 
                                            id="laboratorio-{{ $laboratorio->id_laboratorio }}" 
                                            @if($laboratorio->asignado)
                                                checked='checked'
                                            @endif
                                            value="{{ $laboratorio->id_laboratorio }}">
                                        <label class="custom-control-label pl-2" for="laboratorio-{{ $laboratorio->id_laboratorio }}"><strong>{{ $laboratorio->num_laboratorio }}</strong> {{ $laboratorio->nom_laboratorio }} <i class='ml-2'>(Institución: {{ $laboratorio->nom_institucion }} Sede: {{ $laboratorio->nom_sede }})</i></label>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-sm btnEvent" data-modalselected='#usuario-asignacion-modal' data-close_modal='true' data-event='click' data-route='CancelModal' data-preguntaantes="false">Cancelar</button>
                <button type="button" id='btn-guardar-assig-usuario' data-nom_usuario='{{ $usuario->nom_usuario }}' class="btn btn-primary btn-sm btnEvent" data-close_modal='true' data-event='click' data-route='SaveAsignacion_Usuario'>Guardar</button>
            </div>

        </div>
    </div>
</div>
