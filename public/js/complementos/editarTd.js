function editarTd(elementEvent){
    if(elementEvent.hasClass("editing")){
    } else {
        elementEvent.find(".input_result").prop("disabled", false);
        elementEvent.find(".input_result").focus();
        elementEvent.find(".input_result").select();
        $(".editing").removeClass("editing");
        elementEvent.addClass("editing");
    }
}