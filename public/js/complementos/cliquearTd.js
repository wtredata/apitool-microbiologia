function cliquearTd(elementEvent){
    if(elementEvent.hasClass("editing")){ 
        $(".td-enfocado").removeClass("td-enfocado")
            .find("input")
            .prop("disabled", true);

        $(".editing").removeClass("editing");

        elementEvent.addClass("td-enfocado");

        $(".input-focus").remove();
        
        let inputFocus = $("<input class='input-focus' tabindex='-1'></input>");
        elementEvent.append(inputFocus);

        inputFocus.focus();
    }
}