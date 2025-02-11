function dataIsAnalito(data){
    try {
        if(typeof data.node.data.id_analito_lab != "undefined" && data.node.data.id_analito_lab != null){
            return true;
        } else {
            return false;
        }
    } catch (error) {
        return false;
    }
}