function gestionEnvioForm(form, accion = "deshabilitar"){

    var inputSubmit = form.find("*[type=submit]");
    
    switch(accion) {
        case "habilitar":
            
            if(inputSubmit.find(".text").length > 0){ // Si es un boton personalizado
                inputSubmit
                    .prop("disabled",false)
                    .removeClass("inputDeshabilitado");

                inputSubmit
                    .find(".text")
                    .text(presenteContinuo(false,inputSubmit.find(".text").text().replace("...","")));
            } else {
                inputSubmit
                    .prop("disabled",false)
                    .text(presenteContinuo(false,inputSubmit.text().replace("...","")))
                    .removeClass("inputDeshabilitado");
            }

            
            break;
        case "deshabilitar":
            if(inputSubmit.find(".text").length > 0){
                inputSubmit
                .prop("disabled",true)
                .addClass("inputDeshabilitado");


                inputSubmit
                .find(".text")
                .text(presenteContinuo(true,inputSubmit.find(".text").text()) + "...")
                ;
            } else {
                inputSubmit
                    .prop("disabled",true)
                    .text(presenteContinuo(true,inputSubmit.text()) + "...")
                    .addClass("inputDeshabilitado");
            }
            
            break;
    }
}