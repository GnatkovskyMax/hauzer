$("#delete-obj").on('click',function (data) {
    //console.log(data);
    var data = $(this).data('id');
    //console.log(data);
    $.ajax({
        url: '/ajax/delete',
        type: 'POST',
        data: {id : data},
        success: function(){
            closedialog();
            setTimeout('window.location.reload()', 100);

        }
    });
    //return false;

});


