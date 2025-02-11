<div class="py-3 <?php echo e($nomSection); ?>">

    <div class="row px-3">
        <div class="col-12">
            <div class="alert alert-primary alert-dismissible fade show px-2 py-3 border " role="alert">
                <strong class="mr-2">Recuerde: </strong>Debe seleccionar un intervalo de fechas para generar el reporte
                de sigmometría (de manera predeterminada se muestra el último mes)
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row px-3">
        <div class="col-sm-12 col-md-6 col-lg-4 ">
            <div class="form-group select2-width">
                <label for="sigmometria-lote" class='font-weight-bold d-block'>Lote</label>
                <select id="sigmometria-lote" class='form-control btnEvent w-100' data-event="change"
                        data-route="ActualizarModuloSigmometria">
                    <option value="">Seleccione un lote</option>
                    <?php $__currentLoopData = $lotes_laboratorio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lote_laboratorio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                            value="<?php echo e($lote_laboratorio->id_control_laboratorio); ?>"><?php echo e($lote_laboratorio->cod_lote); ?>

                            - <?php echo e($lote_laboratorio->num_laboratorio); ?> <?php echo e($lote_laboratorio->nom_laboratorio); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="form-group">
                <label for="sigmometria-f-inicial" class='font-weight-bold d-block'>Fecha inicial</label>
                <input type="date" class="form-control btnEvent height-input" id="sigmometria-f-inicial" value="<?php echo e($fecha_inicial); ?>"
                       data-event="change" data-route="ActualizarModuloSigmometria">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="form-group">
                <label for="sigmometria-f-final" class='font-weight-bold d-block'>Fecha final</label>
                <input type="date" class="form-control btnEvent height-input" id="sigmometria-f-final" value="<?php echo e($fecha_final); ?>"
                       data-event="change" data-route="ActualizarModuloSigmometria">
            </div>
        </div>
    </div>

    <div class="row px-3">
        <div class="col-12 col-md-8 mb-3">
            <div class='pre-contenedor-graficos-sigmometria'>
                <h3>Gráfica de sigmometría analítica</h3>
            </div>
            <div class="contenedor-graficos-sigmometria" id='cont_grafica_sigmometria'>
                <div class="presentacion-graficos bg-white">
                    <img src="<?php echo e(asset('img/sixsigma.png')); ?>" alt="gráfica de sigmometria" class='icono-presentacion'>
                    <p class="text-presentacion">
                        Seleccione un lote o un intervalo de fechas para generar la gráfica de sigmometría analítica
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 mb-3">
            <div class='pre-contenedor-graficos-sigmometria'>
                <h3>Resumen del desempeño</h3>
            </div>
            <div class="contenedor-consenso-sigmometria" id='cont_consenso_sigmometria'>

                <p class="note note-sigmometria" id='informacion_control_sigmometria'>
                    <strong>Constante:</strong> <span class='constante'> - - - </span><br/>
                    <strong>Institución:</strong> <span class='institucion'> - - - </span> <strong>Sede:</strong> <span
                        class='sede'> - - - </span><br/>
                    <strong>Laboratorio:</strong> <span class='laboratorio'> - - - </span><br/>
                    <strong>Matriz:</strong> <span class='matriz'></span> <br/>
                    <strong>Control:</strong> <span class='control'> - - - </span> <strong>Lote:</strong> <span
                        class='lote'> - - - </span> <strong>Fecha de caducidad: </strong> <span class='fecha_caducidad'> - - - </span>
                    <br/>
                </p>

                <table class="table table-sm table-bordered text-center">
                    <tbody>
                    <tr>
                        <td class='font-weight-bold px-0 py-1' style='width:20%'>>= 5σ</td>
                        <td class='font-weight-bold px-0 py-1' style='width:20%'>>= 3σ ^ < 5σ</td>
                        <td class='font-weight-bold px-0 py-1' style='width:20%'>>= Zσ ^ < 3σ</td>
                        <td class='font-weight-bold px-0 py-1' style='width:20%'>< Zσ</td>
                        <td class='font-weight-bold px-0 py-1' style='width:20%'>Total</td>
                    </tr>
                    <tr>
                        <td class="bg-siget-verde px-0 py-1" id='conteo_siget_verde'>- -</td>
                        <td class="bg-siget-amarillo px-0 py-1" id='conteo_siget_amarillo'>- -</td>
                        <td class="bg-siget-azul px-0 py-1" id='conteo_siget_azul'>- -</td>
                        <td class="bg-siget-rojo px-0 py-1" id='conteo_siget_rojo'>- -</td>
                        <td class="bg-siget-white px-0 py-1" id='conteo_siget_total'>- -</td>
                    </tr>
                    <tr>
                        <td class=' px-0 py-1' id='porcentaje_siget_verde'>- -</td>
                        <td class=' px-0 py-1' id='porcentaje_siget_amarillo'>- -</td>
                        <td class=' px-0 py-1' id='porcentaje_siget_azul'>- -</td>
                        <td class=' px-0 py-1' id='porcentaje_siget_rojo'>- -</td>
                        <td class=' px-0 py-1'>-</td>
                    </tr>
                    </tbody>
                </table>

                <h3 class='text-center h6'>Porcentaje de cumplimiento valores IET</h3>

                <div class="text-center w-50 m-auto">
                    <table class="table table-sm table-bordered text-center">
                        <tr>
                            <td class='font-weight-bold px-0 py-1' style='width:33.3333%'>>= 1</td>
                            <td class='font-weight-bold px-0 py-1' style='width:33.3333%'>< 1</td>
                            <td class='font-weight-bold px-0 py-1' style='width:33.3333%'>Total</td>
                        </tr>
                        <tr>
                            <td class="bg-siget-rojo px-0 py-1" id='conteo_iet_rojo'>- -</td>
                            <td class="bg-siget-verde px-0 py-1" id='conteo_iet_verde'>- -</td>
                            <td class="px-0 py-1" id='conteo_iet_azul'>- -</td>
                        </tr>
                        <tr>
                            <td class=' px-0 py-1' id='porcentaje_iet_rojo'>- -</td>
                            <td class=' px-0 py-1' id='porcentaje_iet_verde'>- -</td>
                            <td class=' px-0 py-1' id='porcentaje_iet_azul'>- -</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>


    <div class="row px-3">
        <div class="col-12">
            <div class='pre-contenedor-graficos-sigmometria'>
                <h3>Detalle estadístico por analito</h3>
            </div>
            <div class="contenedor-detalle-sigmometria overflow-auto" id='cont_detalle_sigmometria'>
                <div class="cont-tabla-analitos overflow-auto" style='max-height:600px;'>
                    <table class='table table-sm table-bordered text-center table-info-siget'>
                        <thead style='background-color: #e8ecef'>
                        <tr style="width: 100%">
                            <td style='width: 29%' colspan='4' class='font-weight-bold'>I</td>
                            <td style='width: 13.3125%' colspan='3' class='font-weight-bold'>II</td>
                            <td style='width: 17.75%' colspan='4' class='font-weight-bold'>III</td>
                            <td style='width: 17.75%' colspan='4' class='font-weight-bold'>IV</td>
                            <td style='width: 22.1875%' colspan='5' class='font-weight-bold'>V</td>
                        </tr>
                        <tr style="width: 100%">
                            <td colspan='4' style='width: 29%' class='font-weight-bold'>Información del analito</td>
                            <td colspan='3' style='width: 13.3125%' class='font-weight-bold'>Info. base de desempeño
                            </td>
                            <td colspan='4' style='width: 17.75%' class='font-weight-bold'>Análisis de desempeño
                                imprecisión
                            </td>
                            <td colspan='4' style='width: 17.75%' class='font-weight-bold'>Análisis de desempeño de
                                sesgo
                            </td>
                            <td colspan='5' style='width: 22.1875%' class='font-weight-bold'>Cálculo SigET</td>
                        </tr>
                        <tr style="width: 100%">
                            <td style='width: 3%' class='font-weight-bold'>1</td>
                            <td style='width: 10%' class='font-weight-bold'>2</td>
                            <td style='width: 8%' class='font-weight-bold'>3</td>
                            <td style='width: 8%' class='font-weight-bold'>4</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>5</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>6</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>7</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>8</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>9</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>10</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>11</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>12</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>13</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>14</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>15</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>16</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>17</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>18</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>19</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>20</td>
                        </tr>
                        <tr style="width: 100%">
                            <td style='width: 3%' class='font-weight-bold'>#</td>
                            <td style='width: 10%' class='font-weight-bold'>Mensurando</td>
                            <td style='width: 8%' class='font-weight-bold'>Unidades</td>
                            <td style='width: 8%' class='font-weight-bold'>Fuente</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>DIANA</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Media LAB</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>D.E. LAB</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>CVa% mp</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>CV LAB</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>CVR</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>EAc LAB</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>SESGO% mp</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>SESGO LAB</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>SESGO Relativo</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Esc LAB</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>N</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>APS%</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>TE Lab</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>IET</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>σ</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="width: 100%">
                            <td colspan='20'>Sin información</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="btn-flotantes">
        <button title="Exportar PDF de reporte de sigmometría" type='button'
                class='btn-circular btn-circular-sigmometria btnEvent m-auto p-0' data-event="click"
                data-route="Exportar_GraficoSigmometria">
            <div style="margin: 0 0 0 1px;">
                <svg width="27" height="27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M5.87.041a4.103 4.103 0 0 0-.49.08 4.58 4.58 0 0 0-.433.145c-.135.053-.37.174-.522.269a3.83 3.83 0 0 0-.546.437c-.148.146-.34.381-.427.522A4.498 4.498 0 0 0 3.188 2a3.386 3.386 0 0 0-.166.644 4.129 4.129 0 0 0-.05.656l.012.26.733.01c.546.009.74 0 .764-.037.017-.026.03-.194.03-.372 0-.18.028-.418.062-.534.035-.115.121-.293.192-.395.07-.103.205-.25.298-.329.093-.078.282-.193.419-.256a1.93 1.93 0 0 1 .51-.143c.145-.015 1.913-.024 3.93-.018l3.666.01.015 2.566c.015 2.506.017 2.573.106 2.9.05.184.18.511.288.727.107.217.307.535.443.708.136.173.355.405.487.515.132.11.332.264.445.341.114.078.38.223.593.322.213.098.571.227.796.286l.409.107 2.667.013 2.668.013v3.457h1.512V8.372l-.746-.733-1.51-1.483c-.419-.412-.8-.79-.845-.84-.045-.05-.713-.714-1.484-1.475L17.376 1.81c-.36-.357-.923-.91-1.25-1.229L15.533 0l-4.68.005C8.28.008 6.038.025 5.872.041Zm9.832 2.21 1.876 1.859 2.812 2.78c.738.728 1.38 1.37 1.425 1.425l.082.1h-2.2c-1.828 0-2.245-.01-2.466-.06a3.722 3.722 0 0 1-.604-.218 2.391 2.391 0 0 1-.613-.407 2.847 2.847 0 0 1-.413-.47 3.723 3.723 0 0 1-.245-.486l-.106-.266-.014-2.33c-.007-1.33.003-2.33.023-2.33s.22.182.444.403ZM.564 4.285a.897.897 0 0 0-.232.094 1.116 1.116 0 0 0-.216.208L0 4.733V11.155l.115.167a.71.71 0 0 0 .286.242c.166.072.36.075 5.865.076 5.033 0 5.712-.007 5.845-.06.082-.033.186-.09.229-.128a.83.83 0 0 0 .154-.224c.07-.149.075-.333.075-3.264 0-2.93-.004-3.116-.075-3.266a.894.894 0 0 0-.205-.264.91.91 0 0 0-.282-.146c-.101-.027-2.007-.04-5.732-.037-3.069.003-5.64.018-5.712.034Zm2.868 1.476c.111.04.277.144.37.233.091.088.21.249.263.357.053.108.115.318.14.466.03.195.03.354-.004.578-.026.17-.087.385-.135.478a1.52 1.52 0 0 1-.216.3c-.071.073-.212.172-.313.222-.101.05-.248.104-.327.12a6.282 6.282 0 0 1-.634.055c-.348.016-.492.037-.495.072-.003.027-.008.403-.01.836l-.006.786H1.002V5.656l1.114.016c.946.015 1.144.028 1.315.089Zm3.219-.042c.165.03.371.085.458.12.088.036.26.157.383.27.123.111.276.302.34.422.063.121.145.333.183.472.038.14.083.42.1.626.016.205.014.52-.005.7-.02.182-.091.492-.16.69a3.046 3.046 0 0 1-.249.546c-.068.102-.187.24-.265.305a1.953 1.953 0 0 1-.335.214 1.995 1.995 0 0 1-.435.137c-.133.024-.624.043-1.092.043h-.851V5.663h.814c.536 0 .916.019 1.114.056Zm5.062.337v.393h-.874c-.695 0-.883.012-.92.055-.032.037-.044.226-.036.58l.011.526.684.01c.67.01.685.013.707.099.013.048.018.229.011.402l-.012.314-.695.02-.695.02-.01.894-.012.895H8.81V5.663h2.902v.393Zm-9.617.402c-.012.03-.025.303-.028.605-.003.303.006.58.02.617.022.054.08.067.292.067.161 0 .321-.025.407-.064a.518.518 0 0 0 .207-.187c.042-.077.068-.224.07-.398.002-.172-.02-.318-.058-.39a.688.688 0 0 0-.176-.195c-.085-.06-.192-.086-.413-.096-.23-.012-.304-.002-.32.04Zm3.73 1.486v1.494h.206c.113 0 .274-.027.356-.06a.989.989 0 0 0 .228-.128.877.877 0 0 0 .152-.207c.04-.077.103-.275.138-.44.036-.166.065-.475.064-.687a3.79 3.79 0 0 0-.06-.655 1.758 1.758 0 0 0-.164-.442.739.739 0 0 0-.195-.22 1.348 1.348 0 0 0-.571-.148l-.154-.002v1.495Zm-2.843 4.455c-.011.029-.015 2.29-.008 5.025.014 4.962.014 4.973.102 5.266.049.162.154.418.233.57.08.152.22.374.315.493.094.119.3.327.458.462.178.152.427.312.657.422.204.097.518.216.698.265l.327.089 6.306.01c5.46.01 6.306.004 6.306-.045 0-.03-.014-.062-.03-.07a1.995 1.995 0 0 1-.215-.21 95.52 95.52 0 0 0-1.056-1.106c-.045-.044-.998-.053-5.586-.053-5.394 0-5.539-.002-5.792-.078a2.212 2.212 0 0 1-.476-.218 1.912 1.912 0 0 1-.392-.37 1.81 1.81 0 0 1-.243-.44c-.062-.192-.07-.654-.079-5.127l-.01-4.916-.747-.01c-.592-.01-.751 0-.768.04Zm3.548 1.74.01.688h4.962c2.729-.001 4.973-.009 4.987-.017.015-.009.027-.314.027-.678v-.663l-4.999-.01-4.998-.01.01.69Zm12.329.214a.848.848 0 0 0-.198.092.766.766 0 0 0-.156.151c-.061.084-.07.391-.088 3.238l-.02 3.146-1.176.01c-.646.007-1.175.022-1.175.035 0 .013.179.211.398.441l.624.654.47.491c.136.142.346.363.467.493a136.54 136.54 0 0 0 1.002 1.062 1355.007 1355.007 0 0 0 1.581 1.671c.44.465.833.872.872.903.066.053.084.045.197-.078a336.465 336.465 0 0 0 2.015-2.12l2.378-2.518.95-1.004-1.184-.01-1.184-.011-.011-3.143c-.01-3.102-.012-3.144-.095-3.253a.878.878 0 0 0-.264-.2l-.18-.088-2.557.003c-1.406.002-2.606.018-2.666.035ZM6.52 16.576v.688h4.988c4.404 0 4.988-.007 4.992-.059.003-.032.006-.085.006-.118l-.006-.629-.005-.57H6.52v.688Zm0 2.458v.708h4.988c2.743 0 4.988-.014 4.988-.03a180.59 180.59 0 0 0 .002-1.317c-.003-.065-.268-.069-4.99-.069H6.52v.708Z"
                          fill="#fff"/>
                </svg>
            </div>
        </button>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/sigmometria.blade.php ENDPATH**/ ?>