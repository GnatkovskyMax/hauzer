$('.img-wrapp').on('mouseover mouseout',function(e){
    // switch(e.type){
    //     case 'mousemove'
    // }
    $(this).children().eq(0).children().eq(1).toggleClass('show');
    $(this).toggleClass('show-scale');
    console.log($(this).children().eq(0).children().eq(1));
})

