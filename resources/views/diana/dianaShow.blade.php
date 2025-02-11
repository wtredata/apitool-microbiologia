@switch($campo)
    @case("fecha_vigencia")
        {{ $cambio_diana->fecha_vigencia }}
    @break
    @case("valor")
        <tr>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_DIANA" data-field="fecha_vigencia"
                data-tables_liged="DIANA" data-reference="{{ $cambio_diana->id_cambio_diana }}">{{ $cambio_diana->fecha_vigencia }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_DIANA" data-field="valor"
                data-tables_liged="DIANA" data-reference="{{ $cambio_diana->id_cambio_diana }}">{{ $cambio_diana->valor }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_DIANA" data-field="justificacion"
                data-tables_liged="DIANA" data-reference="{{ $cambio_diana->id_cambio_diana }}">{{ $cambio_diana->justificacion }}</td>
            <td><span class="icono-perfil-resultado"
                style="background:#{{ $cambio_diana->color_hexadecimal }}" title='{{ $cambio_diana->nombres }} {{ $cambio_diana->apellidos }}'>{{ $cambio_diana->iniciales }}</span></td>
            <td>
                @if($cambio_diana->predeterminado == 1)
                <button type="button" class="btn btn-sm shadow-none m-0 py-1 px-2 btnEvent btn-success" data-event='click' data-reference='{{ $cambio_diana->id_cambio_diana }}' data-route='AsignacionPredeterminado_DIANA' 
                    title="Clic para definir como predeterminado" data-objjson='{"id_reference": "diana_analito_laboratorio", "nivel_analito": "diana_nivel_analito"}' data-tables_liged="DIANA">Predeterminado</button>
                @else
                
                <button type="button" class="btn btn-sm shadow-none m-0 py-1 px-2 btnEvent btn-light border" data-event='click' data-reference='{{ $cambio_diana->id_cambio_diana }}' data-route='AsignacionPredeterminado_DIANA' 
                    title="Clic para definir como predeterminado" data-objjson='{"id_reference": "diana_analito_laboratorio", "nivel_analito": "diana_nivel_analito"}' data-tables_liged="DIANA">No</button>
                @endif
            </td>
            <td class="table-action">
                <a href="#" class='btnEvent' data-event='click' data-route='Destroy_DIANA' 
                    data-tables_liged="DIANA" data-reference="{{ $cambio_diana->id_cambio_diana }}"
                    data-nom="{{ $cambio_diana->valor }}" data-objjson='{"id_reference": "diana_analito_laboratorio", "nivel_analito": "diana_nivel_analito"}'
                    title='Eliminar el cambio de DIANA especificado'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-trash align-middle">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                        </path>
                    </svg>
                </a>
            </td>
        </tr>
    @break
    @case("justificacion")
        {{ $cambio_diana->justificacion }}
    @break
@endswitch