function notificacion(action, type, title, desc, uniqid) {
    
    switch(action) {
        case "normal": // Ejecutar la notificación con opacación automática
            
            toastr[type](
                desc,
                title,
                {
                    closeButton: true,
                    progressBar: true,
                    extendedTimeOut: "15000",
                    timeOut: "15000",
                    preventDuplicates: false,
                    positionClass: "toast-bottom-right",
                    onclick: null,
                    showDuration: "1000",
                    hideDuration: "1000",
                    debug: false,
                    uniqid: uniqid,
                    newestOnTop: true,
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut"
                }
            )
            
            break;

        case "login":    
            toastr[type](
                desc,
                title,
                {
                    closeButton: true,
                    progressBar: true,
                    extendedTimeOut: "15000",
                    timeOut: "15000",
                    preventDuplicates: false,
                    positionClass: "toast-bottom-left",
                    onclick: null,
                    showDuration: "1000",
                    hideDuration: "1000",
                    debug: false,
                    uniqid: uniqid,
                    newestOnTop: true,
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut"
                }
            )
            
            break;

        case "show": // Ejecutar la notificación para que quede estática
            toastr[type](
                desc,
                title,
                {
                    closeButton: true,
                    progressBar: false,
                    extendedTimeOut: "0",
                    timeOut: "0",
                    preventDuplicates: false,
                    positionClass: "toast-bottom-right",
                    onclick: null,
                    showDuration: "1000",
                    hideDuration: "1000",
                    debug: false,
                    uniqid: uniqid,
                    newestOnTop: true,
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut"
                }
            );
            
            break;
        case "hide": // Eliminar un elemento
            
            if($("#toast-container").length > 0){
                var padre = document.getElementById("toast-container");
                var hijo = document.getElementsByClassName(uniqid)[0];
                padre.removeChild(hijo);
            }
            
            break;
    }
    
}
