@switch($campo)
        @case("nombre")
          {{ $pais->nom_pais }}
        @break
@endswitch