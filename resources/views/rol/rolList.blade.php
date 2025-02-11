<option value="" disabled>Seleccione un rol...</option>

@foreach($roles as $rol)
    <option value="{{ $rol->id_encrypt_rol }}">{{ $rol->nom_rol }}</option>
@endforeach