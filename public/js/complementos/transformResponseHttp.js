function transformResponseHttp(responseHttp){
    try{
        if(typeof responseHttp === "object"){ // Si se recibe un objeto
            return responseHttp;
        } else {
            var jsonRH = JSON.parse(responseHttp); // Convertir a JSON la respuesta HTTP
            if(Object.keys(jsonRH).length < 1){ // Si es un son vacío
                return 400; 
            } else {
                return jsonRH;
            }
        }
    } catch(e){
        return 500;
    }
}