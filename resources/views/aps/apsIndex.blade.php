<table class="table table-striped table-sm text-center dinamicTable SeeIndexError">
    <thead>
        <tr>
            <th class='font-weight-bolder' scope='col' style="width:12%">Fecha</th>
            <th class='font-weight-bolder' scope='col' style="width:10%">%</th>
            <th class='font-weight-bolder' scope='col' style="width:15%">Fuente</th>
            <th class='font-weight-bolder' scope='col' style="width:35%">Justificación</th>
            <th class='font-weight-bolder' scope='col' style="width:8%">Usuario</th>
            <th class='font-weight-bolder' scope='col' style="width:12%">Predeterminado</th>
            <th class='font-weight-bolder' scope='col' style="width:8%">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cambios_aps as $cambio_aps)
        <tr>
            <td style="width:12%" class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_Error" data-field="fecha_vigencia"
                data-tables_liged="Error" data-reference="{{ $cambio_aps->id_cambio_aps }}">{{ $cambio_aps->fecha_vigencia }}</td>

            <td style="width:10%">{{ $cambio_aps->valor_limite }}</td>
            
            <td style="width:15%">{{ $cambio_aps->nom_fuente_etmp }}</td>
            <td style="width:35%" class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_Error" data-field="justificacion"
                data-tables_liged="Error" data-reference="{{ $cambio_aps->id_cambio_aps }}">{{ $cambio_aps->justificacion }}</td>
            <td style="width:8%"><span class="icono-perfil-resultado"
                style="background:#{{ $cambio_aps->color_hexadecimal }}" title='{{ $cambio_aps->nombres }} {{ $cambio_aps->apellidos }}'>{{ $cambio_aps->iniciales }}</span></td>
            <td style="width:12%">
                @if($cambio_aps->predeterminado == 1)
                <button type="button" class="btn btn-sm shadow-none m-0 py-1 px-2 btnEvent btn-success" data-event='click' data-reference='{{ $cambio_aps->id_cambio_aps }}' data-route='AsignacionPredeterminado_Error' 
                    title="Clic para definir como predeterminado" data-objjson='{"id_reference": "aps_analito_laboratorio"}' data-tables_liged="Error">Predeterminado</button>
                @else
                
                <button type="button" class="btn btn-sm shadow-none m-0 py-1 px-2 btnEvent btn-light border" data-event='click' data-reference='{{ $cambio_aps->id_cambio_aps }}' data-route='AsignacionPredeterminado_Error' 
                    title="Clic para definir como predeterminado" data-objjson='{"id_reference": "aps_analito_laboratorio"}' data-tables_liged="Error">No</button>
                @endif
            </td>
            <td class="table-action" style="width:8%">
                <a href="#" class='btnEvent' data-event='click' data-route='Destroy_Error' 
                    data-tables_liged="Error" data-reference="{{ $cambio_aps->id_cambio_aps }}"
                    data-nom="{{ $cambio_aps->valor_limite }}%" data-objjson='{"id_reference": "aps_analito_laboratorio"}'
                    title='Eliminar el cambio de APS especificado'>
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
        @endforeach
    </tbody>
</table>