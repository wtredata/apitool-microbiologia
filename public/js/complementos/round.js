function round(number, decimals = 0){
    decimals = parseInt(decimals);
    if(decimals == 0){
        return number;
    } else {
        return Math.round(number * decimals) / decimals;
    }
}