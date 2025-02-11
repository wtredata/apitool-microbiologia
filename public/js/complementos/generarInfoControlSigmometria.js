function generarInfoControlSigmometria(response){
    let info_control_lab = $("#informacion_control_sigmometria");
    let info_control_act = response.info_control;
    info_control_lab.find(".constante").text(response.constante_z);
    info_control_lab.find(".institucion").text(info_control_act.nom_institucion);
    info_control_lab.find(".sede").text(info_control_act.nom_sede);
    info_control_lab.find(".laboratorio").text(info_control_act.num_laboratorio + " - " + info_control_act.nom_laboratorio);
    info_control_lab.find(".matriz").text(info_control_act.nom_matriz);
    info_control_lab.find(".control").text(info_control_act.nom_matriz);
    info_control_lab.find(".lote").text(info_control_act.cod_lote);
    info_control_lab.find(".fecha_caducidad").text(info_control_act.fecha_vencimiento);
}