function filterCapGraph(elementEvent){
    let graph = elementEvent.parents(".graph");
    let valSelect = elementEvent.val();
    let canvas = graph.find("canvas");
    canvas.hide();
    canvas.eq((valSelect-1)).show();
}