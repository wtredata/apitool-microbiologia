function generarConsensoSigmometria(response){
    
    let conteos = response.consenso.conteo; 
    let porcentajes = response.consenso.porcentaje; 
    
    let conteos_iet = response.iet.conteo; 
    let porcentajes_iet = response.iet.porcentaje; 

    // Resumen en conteo
    $('#conteo_siget_verde').text(conteos.verde);
    $('#conteo_siget_amarillo').text(conteos.amarillo);
    $('#conteo_siget_azul').text(conteos.azul);
    $('#conteo_siget_rojo').text(conteos.rojo);
    $('#conteo_siget_total').text(conteos.total);
    $('#porcentaje_siget_verde').text(round(porcentajes.verde,100) + "%");
    $('#porcentaje_siget_amarillo').text(round(porcentajes.amarillo,100) + "%");
    $('#porcentaje_siget_azul').text(round(porcentajes.azul,100) + "%");
    $('#porcentaje_siget_rojo').text(round(porcentajes.rojo,100) + "%");
    $("#conteo_iet_rojo").text(conteos_iet.rojo);
    $("#conteo_iet_verde").text(conteos_iet.verde);
    $("#conteo_iet_azul").text(conteos_iet.total);
    $("#porcentaje_iet_rojo").text(round(porcentajes_iet.rojo,100) + "%");
    $("#porcentaje_iet_verde").text(round(porcentajes_iet.verde,100) + "%");
    $("#porcentaje_iet_azul").text("100%");
}