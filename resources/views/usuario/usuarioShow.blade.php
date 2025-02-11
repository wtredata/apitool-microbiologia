@switch($campo)
    @case("nom_usuario")
      {{ $usuario->nom_usuario }}
    @break

    @case("rol")
      {{ $usuario->nom_rol }}
    @break

    @case("nombres")
      {{ $usuario->nombres }}
    @break

    @case("apellidos")
      {{ $usuario->apellidos }}
    @break
    
    @case("correo")
      {{ $usuario->correo }}
    @break
    
@endswitch