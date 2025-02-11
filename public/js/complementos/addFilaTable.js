function addFilaTable(trReference, TypeAdd, values = null){

    let nuevaFila = null;

    switch(TypeAdd){
        case "ResultadoCorrida":
            nuevaFila = $(
                "<tr class='tr_registrar'>" +
                    "<td scope='col'>-</td>" +
                    "<td scope='col'>-</td>" +
                    "<td scope='col'><input type='text' class='fecha form-control form-control-sm'></td>" +
                    "<td scope='col' class='border-left-secondary'><input type='text' placeholder='--' class='resultado_m1c1 form-control form-control-sm'></td>" +
                    "<td scope='col'><input type='text' placeholder='--' class='resultado_m1c2 form-control form-control-sm'></td>" +
                    "<td scope='col' class='border-left-secondary'><input type='text placeholder='--' class='resultado_m2c1 form-control form-control-sm'></td>" +
                    "<td scope='col'><input type='text' placeholder='--' class='resultado_m2c2 form-control form-control-sm'></td> " +
                    "<td scope='col' class='border-left-secondary'><button class='btn btn-danger btn-sm btnEvent' title='Eliminar el resultado de comparación' data-route='RemoveTempFileTable' data-event='click' data-nom='el resultado de comparación'><i class='far fa-trash-alt'></i></button></td>"+
                "</tr>"
            );
            
            if(trReference.length > 0){
                trReference.after(nuevaFila);
            } else {
                $("#tbl_gestion_resultados tbody").append(nuevaFila);
            }

            inputDates(
                nuevaFila.find(".fecha"), 
                "basico_hora",
                [
                    {startDate: moment()}
                ]
            );
            
            middlewareEvent(nuevaFila.find(".btnEvent"));
            break;

    }
}