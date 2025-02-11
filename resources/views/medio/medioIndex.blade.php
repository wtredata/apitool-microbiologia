<table class="table table-striped table-sm text-center dinamicTable SeeIndexMedio">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
    @if(isset($medios))   
        @foreach($medios as $medio)
        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Medio" data-field="nombre" data-reference="{{ $medio->id_medio }}">
                <a href="{{route('formEdit.medio',['id'=>$medio->id_medio])}}" target="_blank">{{ $medio->nom_medio }}</a>                
            </td>
            <td>
                @if($medio->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el medio {{ $medio->nom_medio }}" data-route="ChangeStatus_Medio" data-tables_liged="Medio" data-event="click" data-reference="{{ $medio->id_medio }}" data-nom="{{ $medio->nom_medio }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Activar el medio {{ $medio->nom_medio }}" data-route="ChangeStatus_Medio" data-tables_liged="Medio" data-event="click" data-reference="{{ $medio->id_medio }}" data-nom="{{ $medio->nom_medio }}" data-estado="inactivo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar el medio {{ $medio->nom_medio }}" data-route="Destroy_Medio" data-event="click" data-reference="{{ $medio->id_medio }}" data-nom="{{ $medio->nom_medio }}" data-tables_liged="Medio" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        @endforeach
    @endif
    </tbody>
</table>
