@foreach($cepas as $cepa)
    <option value="{{ $cepa->id_cepa }}">{{ $cepa->nom_cepa }}</option>
@endforeach