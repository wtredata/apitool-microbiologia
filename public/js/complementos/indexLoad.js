function indexLoad(section, tablesLigedArray, objFilter = {}, trSelection, fancyliged = null) {

    if(tablesLigedArray == null || tablesLigedArray == "" || typeof tablesLigedArray == "undefined"){
    } else {
        $.each(
            tablesLigedArray,
            function(index, value){

                if(tablesLigedArray[index] == "selfCamp"){
                    trSelection.remove();
                } else {

                    let newObjFilter = {};
                    $.each(
                        objFilter,
                        function(index,val){
                            newObjFilter[index] = $("#"+objFilter[index]).val();
                        }
                    );
                    
                    var contTable = $(".SeeSection" + section + " .Cont_Table_" + tablesLigedArray[index]),
                    routeEventClear = "SeeIndex" + section,
                    uniqnumber = uniqid();

                    notificacion("show","info","Listando información relacionada para " + nomLegibleSection(section) + "...",null,uniqnumber);

                    newObjFilter._token = $('meta[name="csrf-token"]').attr('content');

                    $.get(
                        routeEventClear,
                        newObjFilter
                    ).done(function (response) {

                        contTable.html(response);
                        middlewareEvent(contTable.find(".btnEvent").add(contTable.find("formEvent")));
                        switchIndexLoad(section, contTable.find(".dinamicTable"));
                        if(fancyliged != null){
                            recargarSegmentoFancyTree($("#" + fancyliged));
                        }

                    }).fail(function (response) {
                        if(gestionErroresBackend(response)){
                        } else {
                            notificacion("normal","error","Error listando la información relacionada con " + nomLegibleSection(section));
                        }
                    }).always(function (sdcsdFsdfsdF) {
                        notificacion("hide","info",null,null,uniqnumber);
                    });
                }
            }
        );

    }
}