@foreach($ciudades as $ciudad)
    <option value="{{ $ciudad->id_ciudad }}">{!! $ciudad->nom_pais  . ", " . $ciudad->nom_ciudad !!}</option>
@endforeach