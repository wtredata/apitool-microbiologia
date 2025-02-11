<table class="table table-striped table-sm text-center dinamicTable SeeIndexLote">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Control</th>
            <th scope="col">Fecha de vencimiento</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody> 
        @foreach($lotes as $lote)
        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Lote" data-field="numLote" data-reference="{{ $lote->id_lote }}">{{ $lote->cod_lote }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Lote" data-field="control" data-reference="{{ $lote->id_lote }}">{{ $lote->nom_control }} | {{ $lote->nom_matriz }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Lote" data-field="fecha" data-reference="{{ $lote->id_lote }}">{{ date("F d, Y",strtotime($lote->fecha_vencimiento)) }}</td>
            <td>
                @if($lote->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el lote {{ $lote->cod_lote }} seleccionada" data-route="ChangeStatus_Lote" data-tables_liged="Lote" data-objjson='{"id": "lote_control_reference"}' data-event="click" data-reference="{{ $lote->id_lote }}" data-nom="{{ $lote->cod_lote }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar el lote {{ $lote->cod_lote }} seleccionada" data-route="ChangeStatus_Lote" data-tables_liged="Lote" data-objjson='{"id": "lote_control_reference"}' data-event="click" data-reference="{{ $lote->id_lote }}" data-nom="{{ $lote->cod_lote }}" data-estado="activo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar el lote {{ $lote->cod_lote }}" data-route="Destroy_Lote" data-event="click" data-reference="{{ $lote->id_lote }}" data-nom="{{ $lote->cod_lote }}" data-tables_liged="Lote" data-objjson='{"id": "lote_control_reference"}' width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>