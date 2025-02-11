$(function(){

    $.ajax({
        url: "DeleteDocument",
        type: 'delete',
        data: {
            id: $("#id_reference").val(),
            _token: $('meta[name="csrf-token"]').attr('content')
        }
    }).always(function (ewfwefsf) {
    });
});