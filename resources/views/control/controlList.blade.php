@foreach($controles as $control)
    <option value="{{ $control->id_control }}">{{ $control->nom_control }} | {{ $control->nom_proveedor }} | {{ $control->nom_matriz }}</option>
@endforeach