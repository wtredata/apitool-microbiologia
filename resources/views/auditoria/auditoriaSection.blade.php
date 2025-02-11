<div class="row {{ $nomSection }} m-0 mt-4">
    <div class="col-12">
        <div class="row">
            <div class="col">

                <div class="card shadow w-100">
                    <div class="card-header border-bottom">
                        <h6 class="font-weight-bold text-primary h4 p-0 m-0">Filtro de auditoría</h6>
                    </div>
                    <div class="card-body pb-3">
                        <form class='btnEvent' data-event='submit' data-tables_liged='Auditoria'
                              data-route='SeeIndex_Auditoria'
                              data-objjson='{"laboratorio": "auditoria_laboratorio",
                               "accion": "auditoria_accion", "fecha_inicial": "auditoria_fecha_inicial",
                                "fecha_final": "auditoria_fecha_final"}'>
                            <div class="row w-100 m-0" style="gap:0.5rem 1rem;">
                                <div class="form-group col-12 col-sm-5 col-md-3 col-lg-2 m-0 p-0 select2-width">
                                    <div>
                                        <label class='font-weight-bold'>Laboratorio</label>
                                    </div>
                                    <select style="min-width: 10rem;" name="laboratorio"
                                            id='auditoria_laboratorio'
                                            class='form-control btnEvent w-100'>
                                        @foreach($laboratorios as $laboratorio)
                                            <option>{{ $laboratorio->num_laboratorio }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--<div class="form-group">
                                    <div>
                                        <label class='font-weight-bold'>Analito</label>
                                    </div>
                                    <select style="max-width: 35rem;" name="analito" id='auditoria_analito'
                                            class='form-control btnEvent'>
                                        @foreach($analitos as $analito)
                                            <option>{{ $analito->nom_analito }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 m-0 p-0 select2-width">
                                    <div>
                                        <label class='font-weight-bold'>Acción</label>
                                    </div>
                                    <select
                                        name="acciones[]"
                                        multiple="multiple"
                                        id='auditoria_accion'
                                        class='form-control btnEvent  w-100'>
                                        <option selected value='-1'>Seleccionar todas</option>
                                        @foreach($acciones as $accion)
                                            <option value='{{ $accion->id_titulo }}'>{{ $accion->nom_titulo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12 col-sm-5 col-md-3 col-lg-2 m-0 p-0">
                                    <label class='font-weight-bold'>Fecha inicial</label>
                                    <input class='form-control inputDateSingle btnEvent height-input w-100'

                                           id='auditoria_fecha_inicial'
                                           type="text" value='{{ $fecha_inicial }}'>
                                </div>

                                <div class="form-group col-12 col-sm-6 col-md-3 col-lg-2 m-0 p-0">
                                    <label class='font-weight-bold'>Fecha final</label>
                                    <input class='form-control inputDateSingle btnEvent height-input w-100'
                                           id='auditoria_fecha_final'

                                           type="text" value='{{ $fecha_final }}'>
                                </div>

                                <div class="form-group col-12 col-sm-6 col-md-3 col-lg-2 mb-0 px-0 d-flex align-items-start"
                                     style="margin-top:29px;" >
                                    <div>
                                        <button type='submit'
                                                class='btn m-0 py-0 px-3 btn btn-primary height-input w-100'
                                                style='bottom: 0px;'>Consultar
                                        </button>
                                    </div>
                                </div>
                                {{--<div style="margin-top:29px;" class="form-group d-flex align-items-start">
                                    <div>
                                        <button
                                                title="Exportar PDF de reporte de auditoría"
                                                class='btn m-0 py-0 px-3 btn btn-danger'
                                                data-event="click"
                                                type="button"
                                                data-route="Exportar_GraficaAuditoria"
                                                style="bottom: 0px; height: 38px;">
                                            Descargar PDF
                                        </button>
                                    </div>
                                </div>--}}
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow w-100">
                    <div class="card-header border-bottom">
                        <h6 class="font-weight-bold text-primary h4 p-0 m-0">Listado de actividades</h6>
                    </div>
                    <div class="card-body text-center pt-0">
                        <div class="mt-3 Cont_Table_Auditoria overflow-auto">
                            <table class="table table-striped table-sm text-center dinamicTable SeeIndexAuditoria">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Laboratorio</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Acción</th>
                                    <th scope="col">Descripción</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-flotantes float-up">
            <button title="Exportar PDF de reporte de auditoría" type='button'
                    class='btn-circular btn-circular-auditoria btnEvent'
                    data-event="click"
                    data-route="Exportar_GraficaAuditoria">
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
</div>
