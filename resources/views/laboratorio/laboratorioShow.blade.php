@switch($campo)
    @case("sede")
      {!! $laboratorio->institucion  . " " . $laboratorio->sede !!}
    @break
    
    @case("num_laboratorio")
      {{ $laboratorio->num_laboratorio }}
    @break
    
    @case("nom_laboratorio")
      {{ $laboratorio->nom_laboratorio }}
    @break
    
    @case("tipo")
      @if($laboratorio->principal == 1)
          <span class="font-weight-bold text-primary">Principal</span>
      @else
          <span class="">Secundario</span>
      @endif
    @break
@endswitch