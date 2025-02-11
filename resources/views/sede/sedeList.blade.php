@foreach($sedes as $sede)
    <option value="{{ $sede->id_sede }}">{!! $sede->nom_institucion . " " . $sede->nom_sede !!}</option>
@endforeach