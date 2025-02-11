<option value="">Seleccione un usuario...</option>

@foreach($usuarios as $usuario)
    <option value="{{ $usuario->id_usuario }}">{{ $usuario->nom_usuario }}</option>
@endforeach