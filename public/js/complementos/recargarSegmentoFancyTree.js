function recargarSegmentoFancyTree(arbol = $("#tree_resultados"), fancydirection = null){
    
    if(fancydirection != null){
        if(fancydirection ='parent'){
            var node = arbol.fancytree("getActiveNode");            
            node = node.parent;            
            node.resetLazy();
            node.setExpanded();    
        }
    } else {
        var node = arbol.fancytree("getActiveNode");
        node.resetLazy();
        node.setExpanded();
    }
}