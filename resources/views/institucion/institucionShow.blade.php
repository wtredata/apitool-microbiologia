@switch($campo)
  @case("nombre")
    {{ $institucion->nom_institucion }}
  @break

  @case("constante_z")
    {{ $institucion->constante_z }}
  @break
@endswitch