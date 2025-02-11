function deleteRowTable(elementEvent, idreferences){
    
    let trs = elementEvent.parents("table").find("tr");

    $.each(
        trs,
        function(index, val){
            let filaAct = trs.eq(index);
            let valDataRef = (typeof filaAct.data("val_est_reference") == "undefined") ? 0 : filaAct.data("val_est_reference");
            if(valDataRef == idreferences){
                filaAct.remove();
            }
        }
    );
}