<option value="" disabled>Seleccione un modo...</option>

@foreach($modos as $modo)
    <option value="{{ $modo->id_encrypt_modo }}">{{ $modo->nom_modo }}</option>
@endforeach