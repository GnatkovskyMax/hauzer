/**
 * Created by Max on 15.01.2017.
 */
// $(document).ready(function(){

//     $('.load').on('click', function(){
//       var jm= +($(this).text())+1;
//         $.get("/manual/catalogs",
//             {m: jm}, function(data){
//                 data = $(data);
//                 $(".wrap-catalog.rent").html($('.wrap-catalog.rent', data).html());
//             });
//     });
// });
// $('#delete').submit(function () {
//     var $that = $(this);
//     ajaxRequest($that.data('id'));
//     return false;
// });
// function ajaxRequest(data) {
//     $.ajax({
//         url: '/main/delete',
//         type: 'POST',
//         data: {key: data},
//     });
// }

// $(function () {
//     //console.log($('.deleteObject').click());
//     $('#delete').click(function () {
//         var data = $(this).data('id');
//         console.log(data);
//         $.ajax({
//             url: '/main/delete',
//             type: 'POST',
//             data: {id : data},
//         });
//          return false;
//     });
// });


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


