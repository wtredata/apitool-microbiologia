function impresionError(form,response,tipo){
    
    // Eliminar todas las alertas impresas previamente
    var varErrors = response.responseJSON.errors;
    limpiarFormulario(form);
    
    if(Object.keys(varErrors).length > 0){ // Si hay mas de un error

        var errors;
        
        $.each(varErrors, function(index){

            if(tipo == "registrar" || tipo == "login"){
                
                errors = $(
                    "<div class='alert alert-danger alert-create p-1 mt-1'>"+
                        "<ul class='desc_message mb-0 pt-0 pb-0'>"+
                        "</ul>"+
                    "</div>"
                );
                
                for(i=0; i<varErrors[index].length; i++){
                    errors.find(".desc_message").append($("<li><small>" + varErrors[index][i] + "</small></li>"));
                }
                
            } else if(tipo == "modificar"){

                errors = $(
                    "<ul class='desc_message'>"+
                    "</ul>"
                );
                
                for(i=0; i<varErrors[index].length; i++){
                    errors.append($("<li>" + varErrors[index][i] + "</li>"));
                }
                
            }
            
            
            let contMess = form.find(".contMessage_" + index.split(".")[0]);
            form.find("#" + index.split(".")[0]).addClass("is-invalid");
            contMess.html(errors);

            if(tipo == "login"){
                contMess.addClass("agitacion");
                setTimeout(function(){
                    contMess.removeClass("agitacion");
                },300);
            }

        });
        
    } else {
        notificacion("normal", "error", "Error de validación", "Hay un error en la validación no documentada, por favor comuníquese con el administrador");
    }
}



function limpiarFormulario(form){
    form.find(".contMessage").html("");
    form.find("select").add(form.find("input")).add(form.find("textarea")).removeClass("is-invalid");
}