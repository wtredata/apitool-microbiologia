<div class="pt-5 py-4 px-5 {{ $nomSection }}">

    <h1 class="h3 mb-3">Administración del sistema</h1>

    <div class="row">
        <div class="col-md-3 col-xl-2">

            <div class="card">
                <div class="list-group list-group-flush" role="tablist">
                    @if ($rol_usuario == 1)
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#cliente"
                            role="tab">
                            Usuario
                        </a>
                    @endif
                    @if ($rol_usuario == 1)
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#analitos"
                            role="tab">
                            Analito
                        </a>
                    @else
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#analitos"
                            role="tab">
                            Analito
                        </a>
                    @endif
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#controles"
                        role="tab">
                        Proveedor
                    </a>
                    @if ($rol_usuario == 1 || $rol_usuario == 5)
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#aps"
                            role="tab">
                            APS
                        </a>
                    @endif

                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#per3" role="tab">
                        PER3
                    </a>
                    @if ($rol_usuario == 1 || $rol_usuario == 5)
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#microbiologia"
             role="tab">
            Microbiología
          </a>
                        {{-- <div class="list-group">
                            <a class="list-group-item list-group-item-action" data-toggle="collapse"
                                href="#submenuMicrobiologia" role="button" aria-expanded="false"
                                aria-controls="submenuMicrobiologia">
                                Microbiología
                            </a>
                            <!-- Submenú -->
                            <div class="collapse" id="submenuMicrobiologia">
                                <div class="list-group ml-3">
                                    <a class="list-group-item list-group-item-action" href="#microbiologia-item-medio">
                                        Medios de cultivo
                                    </a>
                                    <a class="list-group-item list-group-item-action"
                                        href="#microbiologia-item-tincion">
                                        Tinciones
                                    </a>
                                    <a class="list-group-item list-group-item-action"
                                        href="#microbiologia--item-prueba">
                                        Pruebas de sensibilidad
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#microbiologia--item-cepa">
                                        Cepas
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-9 col-xl-10">
            <div class="tab-content bg-white">
                @if ($rol_usuario == 1)
                    <div class="tab-pane fade show active" id="cliente" role="tabpanel">
                    @else
                        <div class="tab-pane fade show" id="cliente" role="tabpanel">
                @endif

                <ul class="nav nav-tabs nav-tabs-per" id="cliente-tab">
                    <li class="nav-item">
                        <a class="nav-link" id="cliente-tab-usuario" href="#cliente-item-usuario">Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cliente-tab-institucion"
                            href="#cliente-item-institucion">Institución</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cliente-tab-sede" href="#cliente-item-sede">Sede</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cliente-tab-laboratorio"
                            href="#cliente-item-laboratorio">Laboratorio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cliente-tab-pais" href="#cliente-item-pais">Pais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cliente-tab-ciudad" href="#cliente-item-ciudad">Ciudad</a>
                    </li>
                </ul>

                <div class="tab-content cont-tab-pane-per" id="cliente-tab-content">
                    <div class="tab-pane tab-pane-per" id="cliente-item-usuario">
                        @include('usuario.usuarioSection')
                    </div>
                    <div class="tab-pane tab-pane-per" id="cliente-item-institucion">
                        @include('institucion.institucionSection')
                    </div>
                    <div class="tab-pane tab-pane-per" id="cliente-item-sede">
                        @include('sede.sedeSection')
                    </div>
                    <div class="tab-pane tab-pane-per" id="cliente-item-laboratorio">
                        @include('laboratorio.laboratorioSection')
                    </div>
                    <div class="tab-pane tab-pane-per" id="cliente-item-pais">
                        @include('pais.paisSection')
                    </div>
                    <div class="tab-pane tab-pane-per" id="cliente-item-ciudad">
                        @include('ciudad.ciudadSection')
                    </div>
                </div>
            </div>

            @if ($rol_usuario == 1)
                <div class="tab-pane fade show" id="analitos" role="tabpanel">
                @else
                    <div class="tab-pane fade show active" id="analitos" role="tabpanel">
            @endif

            <ul class="nav nav-tabs nav-tabs-per" id="analitos-tab">
                <li class="nav-item">
                    <a class="nav-link" id="analitos-tab-analito" href="#analitos-item-analito">Analito</a>
                </li>
                @if ($rol_usuario == 1 || $rol_usuario == 5)
                    <li class="nav-item">
                        <a class="nav-link" id="analitos-tab-analizador"
                            href="#analitos-item-analizador">Analizador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="analitos-tab-unidad_medicion"
                            href="#analitos-item-unidad_medicion">Unidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="analitos-tab-metodologia"
                            href="#analitos-item-metodologia">Metodología</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="analitos-tab-reactivo" href="#analitos-item-reactivo">Reactivo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="analitos-tab-temperatura"
                            href="#analitos-item-temperatura">Temperatura</a>
                    </li>
                @endif
            </ul>
            <div class="tab-content cont-tab-pane-per" id="analitos-tab-content">
                <div class="tab-pane tab-pane-per" id="analitos-item-analito">
                    @include('analito.analitoSection')
                </div>
                <div class="tab-pane tab-pane-per" id="analitos-item-analizador">
                    @include('analizador.analizadorSection')
                </div>
                <div class="tab-pane tab-pane-per" id="analitos-item-unidad_medicion">
                    @include('unidad.unidadSection')
                </div>
                <div class="tab-pane tab-pane-per" id="analitos-item-metodologia">
                    @include('metodologia.metodologiaSection')
                </div>
                <div class="tab-pane tab-pane-per" id="analitos-item-reactivo">
                    @include('reactivo.reactivoSection')
                </div>
                <div class="tab-pane tab-pane-per" id="analitos-item-temperatura">
                    @include('temperatura.temperaturaSection')
                </div>
            </div>
        </div>


        <div class="tab-pane fade show" id="controles" role="tabpanel">
            <ul class="nav nav-tabs nav-tabs-per" id="controles-tab">
                <li class="nav-item">
                    <a class="nav-link" id="controles-tab-lote" href="#controles-item-lote">Lote</a>
                </li>
                @if ($rol_usuario == 1 || $rol_usuario == 5)
                    <li class="nav-item">
                        <a class="nav-link" id="controles-tab-control" href="#controles-item-control">Control</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="controles-tab-matriz" href="#controles-item-matriz">Matriz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="controles-tab-proveedor"
                            href="#controles-item-proveedor">Proveedor</a>
                    </li>
                @endif
            </ul>
            <div class="tab-content cont-tab-pane-per" id="controles-tab-content">
                <div class="tab-pane tab-pane-per" id="controles-item-lote">
                    @include('lote.loteSection')
                </div>
                <div class="tab-pane tab-pane-per" id="controles-item-control">
                    @include('control.controlSection')
                </div>
                <div class="tab-pane tab-pane-per" id="controles-item-proveedor">
                    @include('proveedor.proveedorSection')
                </div>
                <div class="tab-pane tab-pane-per" id="controles-item-matriz">
                    @include('matriz.matrizSection')
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="aps" role="tabpanel">
            <ul class="nav nav-tabs nav-tabs-per" id="aps-tab">
                <li class="nav-item">
                    <a class="nav-link" id="aps-tab-tabla_variabilidad" href="#aps-item-tabla_variabilidad">Tabla de
                        variabilidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="aps-tab-fuente_etmp" href="#aps-item-fuente_etmp">Fuente de
                        error</a>
                </li>
            </ul>
            <div class="tab-content cont-tab-pane-per" id="aps-tab-content">
                <div class="tab-pane tab-pane-per" id="aps-item-tabla_variabilidad">
                    @include('variabilidadBiologica.variabilidadBiologicaSection')
                </div>
                <div class="tab-pane tab-pane-per" id="aps-item-fuente_etmp">
                    @include('fuenteETMP.fuenteETMPSection')
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="per3" role="tabpanel">
            <ul class="nav nav-tabs nav-tabs-per" id="per3-tab">
                <li class="nav-item">
                    <a class="nav-link" id="per3-tab-content" href="#per3-tab-item">PER</a>
                </li>
            </ul>
            <div class="tab-content cont-tab-pane-per" id="per3-tab-content">
                <div class="tab-pane tab-pane-per" id="per3-tab-item">
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="analito">Analito:</label>
                            <input type="text" placeholder="Ingrese el analito" class="form-control analito"
                                name="analito">
                            <div class="contMessage contMessage_analito"></div>
                        </div>
                        <div class="form-group col-4">
                            <label for="analizador">Analizador:</label>
                            <input type="text" placeholder="Ingrese el analizador" class="form-control analizador"
                                name="analizador">
                            <div class="contMessage contMessage_analizador"></div>
                        </div>
                        <div class="form-group col-4">
                            <label for="eat_p10">EAT P10:</label>
                            <input type="text" placeholder="Ingrese el EAT P10" class="form-control eat_p10"
                                name="eat_p10">
                            <div class="contMessage contMessage_eat_p10"></div>
                        </div>
                        <div class="form-group col-4">
                            <label for="eat_p30">EAT P30:</label>
                            <input type="text" placeholder="Ingrese el EAT P30" class="form-control eat_p30"
                                name="eat_p30">
                            <div class="contMessage contMessage_eat_p30"></div>
                        </div>
                        <div class="form-group col-4">
                            <label for="eat_p50">EAT P50:</label>
                            <input type="text" placeholder="Ingrese el EAT P50" class="form-control eat_p50"
                                name="eat_p50">
                            <div class="contMessage contMessage_eat_p50"></div>
                        </div>
                        <div class="form-group col-4">
                            <label for="eat_p90">EAT P90:</label>
                            <input type="text" placeholder="Ingrese el EAT P90" class="form-control eat_p90"
                                name="eat_p90">
                            <div class="contMessage contMessage_eat_p90"></div>
                        </div>

                        <div class="col-12">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-sm ml-auto">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="microbiologia" rol="tabpanel">
            <ul class="nav nav-tabs nav-tabs-per" id="microbiologia-tab">
                <li class="nav-item">
                    <a class="nav-link" id="microbiologia-tab-medio"href="#microbiologia-item-medio">Medios de
                        cultivo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="microbiologia-tab-tincion"
                        href="#microbiologia-item-tincion">Tinciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="microbiologia-tab-prueba" href="#microbiologia-item-prueba">Pruebas de
                        sensibilidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="microbiologia-tab-cepa" href="#microbiologia-item-cepa">Cepas</a>
                </li>
            </ul>
            <div class="tab-content cont-tab-pane-per" id="microbiologia-tab-content">
                <div class="tab-pane tab-pane-per" id="microbiologia-item-medio">
                    @include('medio.medioSection')
                </div>
                <div class="tab-pane tab-pane-per" id="microbiologia-item-cepa">
                    @include('cepa.cepaSection')
                </div>
                <div class="tab-pane tab-pane-per" id="microbiologia-item-tincion">
                    @include('tincion.tincionSection')
                </div>
                <div class="tab-pane tab-pane-per" id="microbiologia-item-prueba">
                    @include('prueba.pruebaSection')
                </div>
            </div>
        </div>
    </div>
</div>
