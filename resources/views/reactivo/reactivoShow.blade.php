@switch($campo)
    @case("nombre")
      {{ $reactivo->nom_reactivo }}
    @break

    @case("codigo")
      {{ $reactivo->cod_reactivo }}
    @break
@endswitch