function eventosResponsiveDesign(){
    $(".btn_toggler, .fondo_oscuro").click(function(){

        var contSecundario = $(".cont_secundario").eq(0);

        // Ocultar / Desocultar items de menu de analitos
        if(contSecundario.hasClass("actived")){ // Si el menu esta activo
            contSecundario.removeClass("actived");
            contSecundario.addClass("colapsado");
            $(".fondo_oscuro").hide();
            $(".btn_toggler").addClass("btn_rotado");
            $(".cont_principal").addClass("w-100");
            $(".cont_principal .ui-resizable-handle").hide();
            
        } else { // Si el menu esta desactivado
            contSecundario.addClass("actived");
            contSecundario.removeClass("colapsado");
            $(".fondo_oscuro").show();
            $(".btn_toggler").removeClass("btn_rotado");
            $(".cont_principal").removeClass("w-100");
            $(".cont_principal .ui-resizable-handle").show();
        }
    });
}