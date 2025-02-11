<table class="table table-striped table-sm text-center dinamicTable SeeIndexPrueba">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
    @if(isset($pruebas))   
        @foreach($pruebas as $prueba)

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Prueba" data-field="nombre" data-reference="{{ $prueba->id_prueba }}">
                <a href="{{route('formEdit.prueba',['id'=>$prueba->id_prueba])}}" target="_blank">{{ $prueba->nom_prueba }}</a>

            </td>
            <td>
                @if($prueba->estado_id == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el prueba {{ $prueba->nom_prueba }}" data-route="ChangeStatus_Prueba" data-tables_liged="Prueba" data-event="click" data-reference="{{ $prueba->id_prueba }}" data-nom="{{ $prueba->nom_prueba }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Activar el prueba {{ $prueba->nom_prueba }}" data-route="ChangeStatus_Prueba" data-tables_liged="Prueba" data-event="click" data-reference="{{ $prueba->id_prueba }}" data-nom="{{ $prueba->nom_prueba }}" data-estado="inactivo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar de la prueba {{ $prueba->nom_prueba }}" data-route="Destroy_Prueba" data-event="click" data-reference="{{ $prueba->id_prueba }}" data-nom="{{ $prueba->nom_prueba }}" data-tables_liged="Prueba" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>
        @endforeach
    @endif
    </tbody>
</table>
