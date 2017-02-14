/**
 * Created by Max on 08.02.2017.
 */

$('.call').on('click', function(){
    var form='<div class="modal-form">' +
        '<form action="" class="com-form">' +
        '<input type="text" placeholder="Ваш телефон" name="phone"><br>' +
        '<input type="text" placeholder="Ваше имя" name="name"><br>' +
        '<div class="clos"></div>' +
        '<button type="submit" class="form-btn">Отправить</button>' +
        '</form>' +
        '</div>';
    $('body').append(form);
    var height=parseFloat($(window).height());
    console.log(height);
    $('.modal-form').height(height);
    $(window).resize(function(){
        var height=parseFloat($(window).height());
        $('.modal-form').height(height);
    });
    $('.modal-form').addClass('show-modal');
    $('.clos').on('click', function(){
        $('.modal-form').remove();
    });


});
$('.helper-panel').on('click',function (e) {
    var obj = e.target;
    console.log(obj.className);
 switch(obj.className){
     case "helper-btn rent-scroll":
         var rent = $('.scroll-rent').offset().top;
         var height = $('.offers').height();
         var scroll;
         if($('body').width()<=768&&!$('#filter').is('.hh')){
             scroll = rent-height-20-40;
         }else if($('body').width()<=768&&$('#filter').is('.hh')){
             scroll = rent-height-20;
         }else{
             scroll = rent-height-5;
         }
         console.log(rent+'...'+height);
         $('body').animate({ scrollTop: scroll }, 600);
         return false;
         break;
     case "helper-btn sale-scroll":
         var sale = $('.scroll-sale').offset().top;
         var height = $('.offers').height();
         var scroll;
         if($('body').width()<=768&&!$('#filter').is('.hh')){
             scroll = sale-height-20-40;
         }else if($('body').width()<=768&&$('#filter').is('.hh')){
             scroll = sale-height-20;
         }else{
             scroll = sale-height-5;
         }
         console.log(sale+'...'+height);
         $('body').animate({ scrollTop: scroll }, 600);
         return false;
         break;
     case "helper-btn up-scroll":
         $('body').animate({ scrollTop: 0 }, 600);
         return false;
         break;
}


});