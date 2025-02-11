@foreach($medios as $medio)
    <option value="{{ $medio->id_medio }}">{{ $medio->nom_medio }}</option>
@endforeach