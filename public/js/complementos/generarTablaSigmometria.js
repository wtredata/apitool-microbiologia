function generarTablaSigmometria(response){
    let cont_detalle_sig = $("#cont_detalle_sigmometria tbody");
    // Vaciar informacion de la tabla
    cont_detalle_sig.html("");

    $.each(response.valores_estadisticos, function(index,mensurando){

        let color_bg_sigma = "";

        if(mensurando.sigma == null){
            color_bg_sigma = "class='bg-light'";
        } else if(mensurando.sigma < response.constante_z) { // Rojo
            color_bg_sigma = "class='bg-siget-rojo'";
        } else if(mensurando.sigma >= response.constante_z && mensurando.sigma < 3) { // Azul
            color_bg_sigma = "class='bg-siget-azul'";
        } else if(mensurando.sigma >= 3 && mensurando.sigma < 5) { // Amarillo
            color_bg_sigma = "class='bg-siget-amarillo'";
        } else if(mensurando.sigma >= 5) { // Verde
            color_bg_sigma = "class='bg-siget-verde'";
        }

        let color_bg_iet = "";
        if(mensurando.iet >= 1) { // Rojo
            color_bg_iet = "class='text-danger'";
        }


        var num = mensurando.num_analito;
        var nom_mensurando = mensurando.analito+ " " +mensurando.nivel;
        var unidades = mensurando.unidades;
        var fuente = mensurando.nom_fuente_etmp;
        var diana = mensurando.diana;
        var media = mensurando.media;
        var de = mensurando.de;
        var cv = mensurando.cv;
        var sesgo = mensurando.sesgo;
        var n_puntos = mensurando.puntos_a;
        var et_lab = mensurando.et_lab;
        var iet = mensurando.iet;
        var sigma = mensurando.sigma;

        if(typeof mensurando.valor_limite == "number"){ // Cuando los valores de sesgo ya esten definidos
            var sesgo_mp = mensurando.sesgo_mp;
            var cv_mp = mensurando.cv_mp;
            var etmp = parseFloat(mensurando.valor_limite);
        } else if(typeof mensurando.valor_limite == "string"){ // Cuando se deben calcular el SESGOmp y CVmp
            var sesgo_mp = parseFloat(mensurando.valor_limite) / 2;
            var cv_mp = sesgo_mp / (response.constante_z);
            var etmp = parseFloat(mensurando.valor_limite);
        }

        let cvr = ((isset(cv) && isset(cv_mp)) ? (cv / cv_mp) : null);
        let sesgor = ((isset(sesgo) && isset(sesgo_mp)) ? (sesgo / sesgo_mp) : null);
        let eac_lab = ((isset(etmp) && isset(sesgo) && isset(cv)) ? ((etmp - Math.abs(sesgo)) / (cv * response.constante_z)) : null);
        let esc_lab = ((isset(etmp) && isset(sesgo) && isset(cv)) ? ((etmp - Math.abs(sesgo)) / (cv)) : null );

        cont_detalle_sig.append(
            $("<tr style='width: 100%'>"+ 
                "<td style='width:3%'>"+num+"</td>" + 
                "<td style='width:10%'>"+nom_mensurando+"</td>" + 
                "<td style='width:8%'>"+unidades+"</td>"+
                "<td style='width:8%'>"+((isset(fuente)) ? fuente : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(diana)) ? round(diana,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(media)) ? round(media,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(de)) ? round(de,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(cv_mp)) ? round(cv_mp,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(cv)) ? round(cv,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(cvr)) ? round(cvr,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(eac_lab)) ? round(eac_lab,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(sesgo_mp)) ? round(sesgo_mp,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(sesgo)) ? round(sesgo,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(sesgor)) ? round(sesgor,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(esc_lab)) ? round(esc_lab,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(n_puntos) && n_puntos != 0) ? n_puntos : "N/A")+"</td>"+
                "<td style='width:4.4375%'>"+((isset(etmp)) ? round(etmp,1000) : "N/A")+"%</td>"+
                "<td style='width:4.4375%'>"+((isset(et_lab)) ? round(et_lab,1000) : "N/A") +"</td>"+
                "<td style='width:4.4375%' "+((isset(iet)) ? color_bg_iet : "" )+">"+ ((isset(iet)) ? round(iet,1000) : "N/A")+"</td>"+
                "<td style='width:4.4375%' "+((isset(sigma)) ? color_bg_sigma : "" )+">"+ ((isset(sigma)) ? round(sigma,1000) : "N/A")+"</td>"+
            "</tr>")
        );
    });
}


function isset(valor){
    if(valor == null || typeof valor == "undefined"){
        return false;
    }
    return true;
}