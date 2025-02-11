@foreach($paises as $pais)
    <option value="{{ $pais->id_pais }}">{{ $pais->nom_pais }}</option>
@endforeach