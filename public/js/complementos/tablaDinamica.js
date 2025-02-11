function tablaDinamica(tabObject, options= { autoWidth: false, order: [], aaSorting: []}){
    $.each(tabObject,function(index,val){
        tabObject.eq(index).DataTable(options);
    });
}