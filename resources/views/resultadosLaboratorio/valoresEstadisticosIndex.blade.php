

<div class="col-12">
    <div class="observacion-numerica">
        <div class="numero">*</div>
        <div class="contenido">
            <div class="row">
                <div class="col-4">
                    <div><span>Constante Z</span> <span
                            class='font-weight-bold small float-right text-dark shadow-none'>{{ $constante_z }}</span>
                    </div>
                </div>
                <div class="col-8">
                    @if($eventos == 1)
                        <div><span>Límite APS <span class='small float-right text-primary shadow-none btn-aps btnEvent' data-event='click' data-reference='{{ $id_reference }}' data-route='DinamicModal_Error' data-modal_movible='true' data-modal_tamanodinamico='false'><span class='font-weight-bold'><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle mr-1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> {{ (($valor_limite != "Indeterminado") ? round(floatval($valor_limite), 3) : "Indeterminado")  }}</span> (Fuente: {{ $nom_fuente_etmp }})</span></span></div>
                    @else
                        <div><span>Límite APS <span class='small float-right text-dark shadow-none'><span class='font-weight-bold'>{{ (($valor_limite != "Indeterminado") ? round(floatval($valor_limite), 3) : "Indeterminado") }}</span> (Fuente: {{ $nom_fuente_etmp }})</span></span></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($valores_estadisticos as $nivel => $valor_estadistico)

<div class="col-12">
    <div class="observacion-numerica">
        <div class="numero">{{ $nivel }}</div>
        <div class="contenido">
            <div class="row">
                <div class="col-4">
                    <div><span>Media</span> <span class='font-weight-bold small float-right text-dark shadow-none'>
                        @if($valor_estadistico["media"]== null)
                            - -
                        @else
                            {{ round($valor_estadistico["media"], 3) }}
                        @endif                        
                        </span>
                    </div>
                    <div><span>D.E.</span> <span class='font-weight-bold small float-right text-dark shadow-none'>
                        @if($valor_estadistico["de"]== null)
                            - -
                        @else
                            {{ round($valor_estadistico["de"], 3) }}
                        @endif
                        </span>
                    </div>
                    <div><span>C.V.</span> <span class='font-weight-bold small float-right text-dark shadow-none'>
                        @if($valor_estadistico["cv"]== null)
                            - -
                        @else
                            {{ round($valor_estadistico["cv"], 3) }}
                        @endif
                        </span>
                    </div>
                </div>
                <div class="col-4">
                    @if($eventos == 1)
                        <div>
                            <span>DIANA 
                                <span class='font-weight-bold small text-primary float-right shadow-none btn-diana btnEvent' data-event='click' data-reference='{{ $id_reference }}' data-nivel_analito='{{ $nivel }}' data-route='DinamicModal_DIANA' data-modal_movible='true' data-modal_tamanodinamico='false'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle mr-1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                    @if($valor_estadistico["diana"]== null)
                                        Indeterminada
                                    @else
                                        {{ round($valor_estadistico["diana"], 3) }}
                                    @endif
                                </span>
                            </span>
                        </div>
                    @else
                        <div>
                            <span>DIANA 
                                <span class='font-weight-bold small text-dark float-right shadow-none'>
                                    @if($valor_estadistico["diana"]== null)
                                        Indeterminada
                                    @else
                                        {{ round($valor_estadistico["diana"], 3) }}
                                    @endif
                                </span>
                            </span>
                        </div>
                    @endif

                    


                    <div><span>Sesgo <span class='font-weight-bold small float-right text-dark shadow-none'>
                        @if($valor_estadistico["sesgo"]== null)
                            - -
                        @else
                            {{ round($valor_estadistico["sesgo"], 3) }}
                        @endif
                            </span></span>
                    </div>
                    <div><span>Sigma 
                        
                        @if($valor_estadistico["sigma"]== null)
                            <span class='font-weight-bold small bg-light text-dark rounded px-1 float-right shadow-none'> - - </span>
                        @elseif($valor_estadistico["sigma"] < $constante_z)
                            <span class='font-weight-bold small bg-danger text-white rounded px-1 float-right shadow-none'>{{ round($valor_estadistico["sigma"], 3) }}</span>
                        @elseif($valor_estadistico["sigma"] >= $constante_z && $valor_estadistico["sigma"] < 3)
                            <span class='font-weight-bold small bg-primary text-white rounded px-1 float-right shadow-none'>{{ round($valor_estadistico["sigma"], 3) }}</span>
                        @elseif($valor_estadistico["sigma"] >= 3 && $valor_estadistico["sigma"] < 5)
                            <span class='font-weight-bold small bg-warning text-white rounded px-1 float-right shadow-none'>{{ round($valor_estadistico["sigma"], 3) }}</span>
                        @elseif($valor_estadistico["sigma"] >= 5)
                            <span class='font-weight-bold small bg-success text-white rounded px-1 float-right shadow-none'>{{ round($valor_estadistico["sigma"], 3) }}</span>
                        @endif
                </span>
                    </div>
                </div>
                <div class="col-4">
                    <div><span>N Totales <span class='font-weight-bold small float-right text-dark shadow-none'>{{ $valor_estadistico["puntos_t"] }}
                            </span></span>
                    </div>
                    <div><span>N Aprobados <span class='font-weight-bold small float-right text-dark shadow-none'>{{ $valor_estadistico["puntos_a"] }}
                            </span></span>
                    </div>
                    <div><span>N Rechazados <span class='font-weight-bold small float-right text-dark shadow-none'>{{ $valor_estadistico["puntos_r"] }}
                            </span></span>
                    </div>
                </div>
                <div class="col-6">
                    <div><span>Incertidumbre estandar <span class='font-weight-bold small float-right text-dark shadow-none'>
                    
                    @if($valor_estadistico["de"]== null)
                            - -
                        @else
                            {{ round($valor_estadistico["de"], 3) }}
                        @endif
                                </span></span>
                    </div>
                </div>
                <div class="col-6">
                    <div><span>Incertidumbre expandida <span class='font-weight-bold small float-right text-dark shadow-none'>
                    
                    @if($valor_estadistico["de"]== null)
                            - -
                        @else
                            {{ $constante_z * round($valor_estadistico["de"], 3) }}
                        @endif
                                </span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach