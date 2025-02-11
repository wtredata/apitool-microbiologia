<table class="table table-striped table-sm text-center dinamicTable SeeIndexAuditoria">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Laboratorio</th>
            <th scope="col">Usuario</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acción</th>
            <th scope="col">Descripción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($historicos as $index => $historico)
        <tr>
            <td style='width:5%'>{{ $index+1 }}</td>
            <td style='width:15%'>{{ $historico->num_laboratorio }}</td>
            <td style='width:10%'>{{ $historico->usuario }}</td>
            <td style='width:10%'>{{ date_format(date_create($historico->fecha), "F d, Y H:i:s") }}</td>
            <td style='width:10%'>{{ $historico->nom_titulo }}</td>
            <td style='width:50%'>
                <textarea class='textarea-log' readonly='true'>{{ $historico->descripcion }}</textarea>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
