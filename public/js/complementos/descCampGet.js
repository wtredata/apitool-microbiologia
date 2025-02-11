function descCampGet(form, moduleEvent) {

    switch (moduleEvent.toLowerCase()) {
        case "laboratorio":
            return form.find(".no_laboratorio").val();

        case "usuario":
            return form.find(".nom_usuario").val();

        case "usuario_laboratorio":
            return form.find(".id_laboratorio option[value='" + form.find(".id_laboratorio").val() + "']").text().split(" - ")[0];

        case "corridaarea":
            return form.find(".id_area option[value='" + form.find(".id_area").val() + "']").text().split(" - ")[0];

        case "corridaanalito":
            return form.find(".id_analito option[value='" + form.find(".id_analito").val() + "']").text().split(" - ")[0];


        case "controllaboratorio":
            return form.find(".lote option[value='" + form.find(".lote").val() + "']").text().split(" - ")[0];

        case "usuariopass":
            return "--------";
        
        case "analitolaboratorio":
            return form.find(".analito option[value='" + form.find(".analito").val() + "']").text().split(" - ")[0];

        case "error":
        return form.find(".aps option[value='" + form.find(".aps").val() + "']").text().split(" - ")[0];

        case "diana":
            return form.find(".valor").val();

        default:
            return form.find(".nombre").val();
    }

}
