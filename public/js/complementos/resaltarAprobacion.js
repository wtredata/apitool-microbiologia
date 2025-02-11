function resaltarAprobacion(inputsAprobacion){

    inputsAprobacion.removeClass("input-rechazado");

    $.each(
        inputsAprobacion,
        function(index, val){
            let valorInput = inputsAprobacion.eq(index).val();

            if(valorInput == "" || valorInput == "Si" || valorInput == "si" || valorInput == "SI" || valorInput == "S" || valorInput == "s"  || valorInput == "Y" || valorInput == "y" || valorInput == "1"){
                // Si existe la clase: remuevala
                inputsAprobacion.eq(index).removeClass("input-rechazado");
            } else {
                // Resaltar con la clase de rechazado
                inputsAprobacion.eq(index).addClass("input-rechazado");
            }
        }
    )
}