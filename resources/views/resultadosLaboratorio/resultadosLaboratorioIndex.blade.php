@for($i=sizeof($series)-1; $i>=0; $i--)
    @php $serie = $series[$i]; @endphp
    <tr data-id_serie="{{ $serie['id_serie'] }}">
        <td style="width:8%">{{ $serie["num_serie"] }}</td>
        <td style="width:8%">
            <span class="icono-perfil-resultado" style="background:#{{ $serie['color_hexadecimal'] }}" title='{{ $serie["nombres"] }} {{ $serie["apellidos"] }}'>{{ $serie["iniciales"] }}</span>
        </td>
        <td style="width: 8%;">
            <a href='#' class="btn-comentario align-middle btnEvent" data-event='click' data-route='ComentarioSerie' title='Ver y agregar comentarios'>
                @if($serie['comentario'] == "")
                    <img src="{{ asset('img/comentario.png') }}" alt="Icono agregar comentario">
                @else
                    <img src="{{ asset('img/comentario_lleno.png') }}" alt="Icono comentario previo">
                @endif
            </a>
            <input type="hidden" class='comentario-temp btnEvent' value='' data-event='change' data-route='CambioValorComentario'>
            <input type="hidden" class='comentario-bd' value="{{ $serie['comentario'] }}">
        </td>

        @if(($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3) && !$lote_caducado)
            <td style="width:18%"><input type="text" class='fecha btnEvent' data-mantener_predeterminados='true' data-event='keydown&&&change' data-route='NavegacionResultados&&&CambioValorResultado' value="{{ $serie['fecha'] }}"></td>
        @else
            <td style="width:18%"><input type="text" class='fecha disabled' value="{{ $serie['fecha'] }}"></td>
        @endif

        @for($nivel=1; $nivel<=$num_niveles; $nivel++) 
        
            @php
                $result_search = array_search($nivel, array_column($serie["resultados"], "nivel_analito"));
                if($result_search !== FALSE){
                    $resultado = $serie["resultados"][$result_search];
                } else {
                    $resultado = false;
                }
            @endphp

            @if($resultado)        
                @if(($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3) && !$lote_caducado)
                    <td style="width:{{ (50/$num_niveles) }}%">
                        <input type="text" class='resultado btnEvent' data-nivel='{{ $nivel }}' data-mantener_predeterminados='true' data-event='keydown&&&change' data-route='NavegacionResultados&&&CambioValorResultado' value='{{ $resultado["concentracion"] }}'>
                        <input class="aprobacion form-check-input form-check-input-warning btnEvent" data-mantener_predeterminados='true' data-event='keydown&&&change' data-route='NavegacionResultados&&&CambioValorResultado' type="checkbox" 
                        @if($resultado["estado"])
                            checked
                        @endif
                        />
                    </td>
                @else
                    <td style="width:{{ (50/$num_niveles) }}%">
                        <input type="text" class='resultado disabled' value='{{ $resultado["concentracion"] }}'>
                        <input class="aprobacion form-check-input form-check-input-warning disabled" type="checkbox" 
                        @if($resultado["estado"])
                            checked
                        @endif
                        />
                    </td>
                @endif
            @else
                @if(($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3) && !$lote_caducado)
                    <td style="width:{{ (50/$num_niveles) }}%">
                        <input type="text" class='resultado btnEvent' data-nivel='{{ $nivel }}' data-mantener_predeterminados='true' data-event='keydown&&&change' data-route='NavegacionResultados&&&CambioValorResultado'>
                        <input class="aprobacion form-check-input form-check-input-warning btnEvent" data-mantener_predeterminados='true' data-event='keydown&&&change' data-route='NavegacionResultados&&&CambioValorResultado' type="checkbox" checked />
                    </td>
                @else
                    <td style="width:{{ (50/$num_niveles) }}%">
                        <input type="text" class='resultado disabled'>
                        <input class="aprobacion form-check-input form-check-input-warning disabled" type="checkbox" checked />
                    </td>
                @endif
            @endif

            @endfor

            @if(($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3) && !$lote_caducado)
            <td style="width:8%">
                <a href="#" title='Eliminar esta fila de resultados' class='eliminar btnEvent' data-event='click&&&keydown' data-route='DestroySerie&&&NavegacionResultados' data-mantener_predeterminados='true' data-reference="{{ $serie['id_serie'] }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="btn-eliminar align-middle">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                        </path>
                    </svg>
                </a>
            </td>
            @endif
    </tr>
@endfor