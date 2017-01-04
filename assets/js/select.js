var select = $('.select select').children();
$('.select').children().each(function(index){
    if(this.tagName=='SELECT'){

        var ul = $('<ul></ul>');
        $(this).children().each(function(){

            var option_value=$(this).attr('value');
            $('<li></li>').html($(this).html()).attr('value',option_value ).on('click', function(){

                $(this).parent().children().each(function(){
                    console.log();
                    $(this).parent().parent().children().eq(0).children().removeAttr('selected', 'selected');
                    $(this).parent().parent().children().eq(0).children().filter("[value='"+option_value+"']").attr('selected', 'selected');
                    console.log();

                });
            }).appendTo(ul);
        });
        ul.appendTo(this.parentNode);
        //console.log(this.parentNode);
    }
});

$("#filter li").on('click',function(index){
    if($(this).parent().children().eq(0)){

    }
    if($(this).parent().children().eq(0).attr('data')=='value'){
        $(this).parent().children().eq(0).remove();
        var clon =  $('<li></li>').html($(this).html()).attr('data', 'value');
        clon.prependTo($(this).parent());
    }else{
        var clon =  $('<li></li>').html($(this).html()).attr('data', 'value');
        clon.prependTo($(this).parent());
    }
    $(this).parent().children().not("li[data='value']").addClass('none');

});
$("#filter ul").on('mousemove',function(index){
    $(this).children().removeClass('none');
    });
function visibleDopFilter(){
    $('#select').toggleClass('visible');
};
$('.adv').on('click', visibleDopFilter);
$(window).on('scroll', scroll);
function scroll(){
    console.log('hhhh:'+$(window).scrollTop());
   var f =  $('#filter').offset();
    var ft = 39;
    if(ft<=$(window).scrollTop()){
        $('#filter').addClass('hh');
        console.log(ft);
    }
    else if($(window).scrollTop()==0){
        $('#filter').removeClass('hh');
    }

}
$('.visible-direct-inputs').on('click',function(){
    $('.filter-line-input').val('');
    $('.filter-line-input').toggleClass('active-input');
})



