function eliminarModal(modalElement){

    let padreModal = modalElement.parent();
    
    modalElement.modal("hide");
    padreModal.html("");

    /*
    if($("body").hasClass("modal-open")){
        contM.find(".modal").modal("hide");
        contM.html("");
        $('body').removeClass('modal-open'); 
        
        if(!($("body").hasClass("p-0"))){
            $("body").addClass("p-0");
        }
        $('.modal-backdrop').remove();
    }

    */
}