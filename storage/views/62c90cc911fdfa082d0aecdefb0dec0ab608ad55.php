<div class="py-3 px-2 <?php echo e($nomSection); ?>">

    <div class="inputs-hidden">
        <input type="hidden" id='grafica_integrada_analito' value="<?php echo e($id_analito_lab); ?>">
        <input type="hidden" id='grafica_integrada_fecha_inicial' value="<?php echo e($fecha_inicial); ?>">
        <input type="hidden" id='grafica_integrada_fecha_final' value="<?php echo e($fecha_final); ?>">
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-7">
            <p class="note note-light note-contraste ml-2 mb-0" id='informacion_analito_grafica'>
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

        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 mb-3">
                    <div class="row">
                        <div class="col-sm">
                            <label class="form-label font-weight-bold">Fecha de cálculo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-2 mb-sm-0">
                            <input type="date" id="valores-estadisticos-f-inicial-grafica" class="form-control btnEvent height-input"
                                   data-event="change" data-tipofecha="fecha_inicial"
                                   data-route="ActualizarGraficaIntegrada" value='<?php echo e($fecha_inicial); ?>'/>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="date" id="valores-estadisticos-f-final-grafica" class="form-control btnEvent height-input"
                                   data-event="change" data-tipofecha="fecha_final"
                                   data-route="ActualizarGraficaIntegrada"
                                   value='<?php echo e($fecha_final); ?>'/>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <div class='pre-contenedor-graficos-integrados'>
                        <h3>Gráficas integradas de control de calidad</h3>
                    </div>
                    <div class="contenedor-graficos-integrados" id='cont_grafica_integrada'>
                        <div class="presentacion-graficos">
                            <img src="<?php echo e(asset('img/monitoriando-graficas.jpg')); ?>"
                                 alt="gráfica integrada de control de calidad" class='icono-presentacion'>
                            <p class="text-presentacion">
                                Seleccione un analito para generar las gráficas integradas de control de calidad
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 mb-4 pl-5 pr-5">
            <div id='contenedor-valores-estadisticos-grafica' class='m-0 p-0'>
                <div class="col-12">
                    <div class="observacion-numerica">
                        <div class="numero">*</div>
                        <div class="contenido">
                            <div class="row">
                                <div class="col-4">
                                    <div><span>Constante Zwww</span> <span
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
                        </div>
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

        <button title="Gráfico integrado de control" type='button' class='btn-circular btn-circular-resultados btnEvent'
                data-event="click" data-route="SeeSection_Resultado" data-temporal_off="true"
                data-menu_item_select='#li_sidebar_resultados'>

            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="align-middle">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
        </button>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/graficaIntegrada.blade.php ENDPATH**/ ?>