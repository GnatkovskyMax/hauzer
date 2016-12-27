/**
 * Created by Max on 20.12.2016.
 */

$('.view_dop_link').on('mouseover mouseout',function(e){
    var child = $(this).children();
    console.log($(this).children());
    if(child[1]!==undefined&&child[1].className=='dop-link'){
    switch(e.type){
        case "mouseover" :

                $(child[1]).addClass('dop-link-active');
                $('.header').addClass('height');
            console.log('over');
            break;
    }
}else{

    }
    switch(e.type){
        case "mouseout" :
            $(child[1]).removeClass('dop-link-active');
            $('.header').removeClass('height');
            console.log('out');
            break;

    }

});
