@foreach($tinciones as $tincion)
    <option value="{{ $tinciones->id_tincion }}">{{ $tinciones->nom_tincon }}</option>
@endforeach