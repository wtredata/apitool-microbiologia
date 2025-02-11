@switch($campo)
    @case("codigo")
      {{ $analito->cod_analito }}
    @break

    @case("nombre")
      {{ $analito->nom_analito }}
    @break

    @case("cualitativo")
      @if($analito->cualitativo == 1)
          <span class="font-weight-bold text-primary">Cualitativo</span>
      @else
          <span class="">Cuantitativo</span>
      @endif
    @break
@endswitch