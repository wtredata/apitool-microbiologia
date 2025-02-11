<div class="py-3 px-2 <?php echo e($nomSection); ?>">

    <div class="inputs-hidden">
        <input type="hidden" id='resultado_analito_node'>
        <input type="hidden" id='resultado_analito' value="<?php echo e($id_analito_lab); ?>">
        <input type="hidden" id='resultado_fecha_inicial' value="<?php echo e($fecha_inicial); ?>">
        <input type="hidden" id='resultado_fecha_final' value="<?php echo e($fecha_final); ?>">
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-7">
            <p class="note note-light note-contraste" id='informacion_analito'>
                <strong>Laboratorio:</strong> <span class='laboratorio'> - - - </span>
                <strong>Matriz:</strong> <span class='matriz'> - - - </span> <br/>
                <strong>Control:</strong> <span class='control'> - - - </span> <strong>Lote:</strong> <span
                    class='lote'> - - - </span> <strong>Fecha de
                    caducidad: </strong> <span class='fecha_caducidad'> - - - </span> <br/>
                <strong>Analito:</strong> <span class='analito'> - - - </span> <strong>Analizador:</strong> <span
                    class='analizador'> - - - </span> <br/>
                <strong>Unidades:</strong> <span class='unidades'> - - - </span> <strong>Metodología:</strong> <span
                    class='metodologia'> - - - </span> <br/>
                <strong>Reactivo:</strong> <span class='reactivo'> - - - </span> <strong>Temperatura:</strong> <span
                    class='temperatura'> - - - </span> <br/>
            </p>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 text-right">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-white btnEvent" data-event='click'
                        data-route='NavegarAnalito_Anterior'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-arrow-left align-middle mr-2">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    Analito anterior
                </button>
                <button type="button" class="btn btn-primary btn-sm btnEvent" data-event='click'
                        data-route='NavegarAnalito_Siguiente'>Analito
                    siguiente
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-arrow-right align-middle ml-2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </div>
        </div>

    </div>


    <div class="row py-3 px-2">
        <div class="col-12 col-md-7">
            <ul class="nav nav-tabs" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active bg-white border-top" id="ex1-tab-1" data-mdb-toggle="tab"
                       href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">Resultados
                        puntuales</a>
                </li>
            </ul>

            <div class="tab-content" id="ex1-content">

                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">

                    <div class="bg-white p-3 border">

                        <?php if($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3): ?>
                            <div class='bg-white mb-2' id='addrow_coment_rf1'>
                                <button type="button" class="btn btn-sm btn-outline-primary shadow-none btnEvent"
                                        data-event='click' data-route='AddFilaResultados'>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="align-middle mr-2">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Agregar fila
                                </button>
                            </div>
                        <?php endif; ?>

                        <table class="table table-sm tabla-encabezado-resultados mb-0 text-center">
                            <thead id='contenedor-titulos-resultados'>
                            <tr>
                                <th scope='col' class='col-1 font-weight-bold'>#</th>
                                <th scope='col' class='col-1 font-weight-bold'>Usuario</th>
                                <th scope='col' class='col-2 font-weight-bold'>Fecha</th>
                                <th scope='col' class='col-3 font-weight-bold'>Concentración nivel 1</th>
                                <th scope='col' class='col-3 font-weight-bold'>Concentración nivel 2</th>
                                <th scope='col' class='col-2 font-weight-bold'>Acciones</th>
                            </tr>
                            </thead>
                        </table>

                        <div class='overflow-mdb contenedor-tabla-resultados'>
                            <table
                                class="table table-sm table-striped table-hover tabla-resultados table-bordered text-center">
                                <tbody id='contenedor-resultados'>
                                <tr>
                                    <td class='col-3'>Sin resultados por mostrar...</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="row pt-1">
                        <div class="col-sm mt-2 mt-sm-0">
                            <label class="form-label font-weight-bold">Fecha de cálculo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-2 mb-sm-0">
                            <input type="date" id="valores-estadisticos-f-inicial"
                                   class="form-control btnEvent height-input" data-event="change"
                                   data-tipofecha="fecha_inicial" data-route="ListarValoresEstadisticos"
                                   value='<?php echo e($fecha_inicial); ?>'/>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="date" id="valores-estadisticos-f-final"
                                   class="form-control btnEvent height-input" data-event="change"
                                   data-tipofecha="fecha_final" data-route="ListarValoresEstadisticos"
                                   value='<?php echo e($fecha_final); ?>'/>
                        </div>
                    </div>
                </div>


                <div id='contenedor-valores-estadisticos' class='m-0 p-0'>
                    <div class="col-12">
                        <div class="observacion-numerica">
                            <div class="numero">*</div>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-4">
                                        <div><span>Constante Zdddd</span> <span
                                                class='font-weight-bold small float-right text-dark shadow-none'>- -</span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div><span>Límite APS <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'>- -
                                                    % (Fuente indeterminada)</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="observacion-numerica">
                            <div class="numero">1</div>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-4">
                                        <div><span>Media</span> <span
                                                class='font-weight-bold small float-right text-dark shadow-none'> - -
                                            </span>
                                        </div>
                                        <div><span>D.E.</span> <span
                                                class='font-weight-bold small float-right text-dark shadow-none'> - -
                                            </span>
                                        </div>
                                        <div><span>C.V.</span> <span
                                                class='font-weight-bold small float-right text-dark shadow-none'> - -
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div><span>DIANA <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                        <div><span>Sesgo <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                        <div><span>Sigma <span
                                                    class='font-weight-bold small bg-light text-dark rounded px-1 float-right shadow-none'>
                                                    - - </span></span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div><span>P. Totales <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                        <div><span>P. Aprobados <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                        <div><span>P. Rechazados <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div><span>Incertudumbre estandar <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div><span>Incertudumbre espandida <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="observacion-numerica">
                            <div class="numero">2</div>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-4">
                                        <div><span>Media</span> <span
                                                class='font-weight-bold small float-right text-dark shadow-none'> - -
                                            </span>
                                        </div>
                                        <div><span>D.E.</span> <span
                                                class='font-weight-bold small float-right text-dark shadow-none'> - -
                                            </span>
                                        </div>
                                        <div><span>C.V.</span> <span
                                                class='font-weight-bold small float-right text-dark shadow-none'> - -
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div><span>DIANA <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                        <div><span>Sesgo <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                        <div><span>Sigma <span
                                                    class='font-weight-bold small bg-light text-dark rounded px-1 float-right shadow-none'>
                                                    - - </span></span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div><span>P. Totales <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                        <div><span>P. Aprobados <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                        <div><span>P. Rechazados <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div><span>Incertudumbre estandar <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div><span>Incertudumbre espandida <span
                                                    class='font-weight-bold small float-right text-dark shadow-none'> -
                                                    - </span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="cont-modal-original-comentarios">
        <div class="modal comentario-serie" tabindex="-1">
            <div class="modal-dialog" style="max-width: 600px !important;">
                <div class="modal-content">
                    <div class="modal-header bg-primary font-weight-bold">
                        <p class="heading lead m-0 text-white"><strong>Comentario</strong></p>
                        <button class="btnEvent close" data-event="click" data-route="CancelModal"
                                data-preguntaantes="false" data-modalselected="#sectionModalsD .comentario-serie">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <input type='hidden' class='idx_element_coment' value='" + idxComentario + "'>

                        <div class='form-group'>
                            <label>Comentarios previos:</label>
                            <textarea class='caja_comentarios_previos' readonly='readonly'></textarea>
                        </div>

                        <?php if($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3): ?>
                            <div class='form-group' id='new_coment_rf1'>
                                <label>Nuevo comentario:</label>
                                <textarea class='form-control cont-comentario-temp'></textarea>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class='modal-footer'>
                        <?php if($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3): ?>
                            <button class='btn btn-primary btn-sm ml-0 btnEvent' id='acept_coment_rf1'
                                    data-event='click' data-route='SaveTempComentario'>Aceptar
                            </button>
                        <?php endif; ?>
                        <button class='btn btn-light btn-sm ml-0 btnEvent' data-event='click' data-route='CancelModal'
                                data-preguntaantes='false' data-modalselected='#sectionModalsD .comentario-serie'>
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btn-flotantes">
        <button title="Lista de analitos" type='button' class='btn-circular btn-circular-analito' data-toggle='modal'
                data-target='#panel-lateral-analitos'>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="align-middle">
                <line x1="8" y1="6" x2="21" y2="6"></line>
                <line x1="8" y1="12" x2="21" y2="12"></line>
                <line x1="8" y1="18" x2="21" y2="18"></line>
                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                <line x1="3" y1="18" x2="3.01" y2="18"></line>
            </svg>
        </button>

        <button title="Gráfico integrado de control" type='button' class='btn-circular btn-circular-grafico btnEvent'
                data-event="click" data-route="SeeSection_GraficaIntegrada" data-temporal_off='true'
                data-menu_item_select='#li_sidebar_grafica'>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="align-middle">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
            </svg>
        </button>

        <?php if($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3): ?>
            <button title="Guardar cambios de resultados" id='save_coment_rf1' type='button'
                    class='btn-circular btn-circular-guardar btnEvent' data-event='click' data-route='SaveResults'>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="align-middle">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                    <polyline points="17 21 17 13 7 13 7 21"></polyline>
                    <polyline points="7 3 7 8 15 8"></polyline>
                </svg>
            </button>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/resultado.blade.php ENDPATH**/ ?>