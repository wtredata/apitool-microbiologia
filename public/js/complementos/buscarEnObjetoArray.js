function buscarEnObjetoArray(array, columnaObj, valorColumnaObj){
    for(let indexS=0; indexS<array.length; indexS++){
        if(array[indexS][columnaObj] == valorColumnaObj){
            return indexS;
        }
    }
    return null;
}