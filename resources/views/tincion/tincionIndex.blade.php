<table class="table table-striped table-sm text-center dinamicTable SeeIndexTincion">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
    @if(isset($tinciones))   
        @foreach($tinciones as $tincion)
            <tr>
                <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Tincion" data-field="nombre" data-reference="{{ $tincion->id_tincion }}">
                    {{-- {{ $tincion->nom_tincion }} --}}
                <a href="{{route('formEdit.tincion',['id'=>$tincion->id_tincion])}}" target="_blank">{{ $tincion->nom_tincion }}</a>

                </td>
                <td>
                    @if($tincion->estado == 1)
                        <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar la tinción {{ $tincion->nom_tincion }}" data-route="ChangeStatus_Tincion" data-tables_liged="Tincion" data-event="click" data-reference="{{ $tincion->id_tincion }}" data-nom="{{ $tincion->nom_tincion }}" data-estado="inactivo">Activo</button>
                    @else
                        <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Activar la tinción {{ $tincion->nom_tincion}}" data-route="ChangeStatus_Tincion" data-tables_liged="Tincion" data-event="click" data-reference="{{ $tincion->id_tincion }}" data-nom="{{ $tincion->nom_tincion }}" data-estado="inactivo">Inactivo</button>
                    @endif
                </td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar la  tinción {{ $tincion->nom_tincion }}" data-route="Destroy_Tincion" data-event="click" data-reference="{{ $tincion->id_tincion}}" data-nom="{{ $tincion->nom_tincion }}" data-tables_liged="Tincion" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                </td>
            </tr>
        @endforeach
    @endif
</tbody>
</table>
