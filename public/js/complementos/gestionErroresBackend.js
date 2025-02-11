function gestionErroresBackend(response){
    if(response.status == 403){
        notificacion("normal", "warning", "No cuenta con los permisos necesarios...");
        return true;
    } else if(response.status == 401){
        window.open("/","Iniciar sesion - IQC2 version 4","width=1000,height=600") 
        notificacion("normal", "warning", "Por favor inicie sesion en una nueva ventana e intente nuevamente...");
        return true;
    } else if(response.status == 419){
        notificacion("normal", "warning", "Por favor recargue la ventana (F5), ha vencido el token de seguridad...");
        return true;
    } else {
        return false;
    }
}