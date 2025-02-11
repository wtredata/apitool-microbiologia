@switch($campo)
    @case("institucion")
      {{ $sede->nom_institucion }}
    @break
    
    @case("ciudad")
      {{ $sede->nom_ciudad }}
    @break
    
    @case("nombre")
      {{ $sede->nom_sede }}
    @break
    
    @case("nom_contacto")
      {{ $sede->nom_contacto }}
    @break
    
    @case("tel_contacto")
      {{ $sede->tel_contacto }}
    @break
    
    @case("correo_contacto")
      {{ $sede->correo_contacto }}
    @break
    
    @case("direccion")
      {{ $sede->direccion }}
    @break
@endswitch