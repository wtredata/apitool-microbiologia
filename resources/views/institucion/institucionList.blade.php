@foreach($instituciones as $institucion)
    <option value="{{ $institucion->id_institucion }}">{{ $institucion->nom_institucion }}</option>
@endforeach