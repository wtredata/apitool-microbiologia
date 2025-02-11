@switch($campo)
        @case("nombre")
          {{ $proveedor->nom_proveedor }}
        @break
@endswitch