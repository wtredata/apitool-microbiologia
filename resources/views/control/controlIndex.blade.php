<table class="table table-striped table-sm text-center dinamicTable SeeIndexControl">
    <thead>
        <tr>
            <th scope="col">Proveedor</th>
            <th scope="col">Matriz</th>
            <th scope="col">Nombre</th>
            <th scope="col">Niveles</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($controles as $control)

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Control" data-field="proveedor" data-reference="{{ $control->id_control }}">{{ $control->nom_proveedor }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Control" data-field="matriz" data-reference="{{ $control->id_control }}">{{ $control->nom_matriz }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Control" data-field="nombre" data-reference="{{ $control->id_control }}">{{ $control->nom_control }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Control" data-field="numNiveles" data-reference="{{ $control->id_control }}">{{ $control->num_niveles }}</td>
            <td>
                @if($control->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el control {{ $control->nom_control }}" data-route="ChangeStatus_Control" data-tables_liged="Control" data-objjson='{"id": "control_proveedor_reference"}' data-event="click" data-reference="{{ $control->id_control }}" data-nom="{{ $control->nom_control }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar el control {{ $control->nom_control }}" data-route="ChangeStatus_Control" data-tables_liged="Control" data-objjson='{"id": "control_proveedor_reference"}' data-event="click" data-reference="{{ $control->id_control }}" data-nom="{{ $control->nom_control }}" data-estado="activo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar el control {{ $control->nom_control }}" data-route="Destroy_Control" data-event="click" data-reference="{{ $control->id_control }}" data-nom="{{ $control->nom_control }}" data-tables_liged="Control" data-objjson='{"id": "control_proveedor_reference"}' width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>