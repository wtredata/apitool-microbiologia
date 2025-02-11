@foreach($analitos as $analito)
    <option value="{{ $analito->id_analito }}">{{ $analito->nom_analito }}</option>
@endforeach