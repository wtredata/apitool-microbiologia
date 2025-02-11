@switch($campo)
    @case("lote")
        <tr>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_ControlLaboratorio" data-field="laboratorio"
                data-tables_liged="ControlLaboratorio" data-reference="{{ $control_laboratorio->id_control_laboratorio }}">
                {{ $control_laboratorio->nom_laboratorio }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_ControlLaboratorio" data-field="lote"
                data-tables_liged="ControlLaboratorio" data-reference="{{ $control_laboratorio->id_control_laboratorio }}">
                {{ $control_laboratorio->cod_lote }}</td>
            <td>{{ $control_laboratorio->nom_control }}</td>
            <td>{{ $control_laboratorio->nom_matriz }}</td>
            <td>{{ $control_laboratorio->num_niveles }}</td>
            <td>{{ $control_laboratorio->fecha_vencimiento }}</td>
            <td>
                @if($control_laboratorio->estado_control_laboratorio == 1)
                <button type="button" class="btn btn-sm btnEvent shadow-none m-0 py-1 px-2 btn-success" data-event='click'
                    data-route='ChangeStatus_ControlLaboratorio' data-tables_liged="ControlLaboratorio"
                    data-fancyliged='tree_resultados' data-reference="{{ $control_laboratorio->id_control_laboratorio }}"
                    data-nom="{{ $control_laboratorio->cod_lote }}" data-objjson='{"id_reference": "control_lab_laboratorio"}'
                    data-estado="Cerrado" title="Clic para cerrar el lote">Abierto</button>
                @else
                <button type="button" class="btn btn-sm btnEvent shadow-none m-0 py-1 px-2 btn-danger" data-event='click'
                    data-route='ChangeStatus_ControlLaboratorio' data-tables_liged="ControlLaboratorio"
                    data-fancyliged='tree_resultados' data-reference="{{ $control_laboratorio->id_control_laboratorio }}"
                    data-nom="{{ $control_laboratorio->cod_lote }}" data-objjson='{"id_reference": "control_lab_laboratorio"}'
                    data-estado="Abierto" title='Clic para abrir el lote'>Cerrado</button>
                @endif
            </td>
            <td class="table-action">
                <a href="#" class='btnEvent' data-event='click' data-route='Destroy_ControlLaboratorio'
                    data-tables_liged="ControlLaboratorio" data-fancyliged='tree_resultados'
                    data-reference="{{ $control_laboratorio->id_control_laboratorio }}"
                    data-nom="{{ $control_laboratorio->cod_lote }}" data-objjson='{"id_reference": "control_lab_laboratorio"}'
                    title='Eliminar el lote para el laboratorio especificado'>
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
@endswitch