function buscarPrimerCoincidencia(array, columna, valor){
    for(index_bpc=0; index_bpc<array.length; index_bpc++){
        if(array[index_bpc][columna] === valor){
            return array[index_bpc];
        }
    }
    return false;
}