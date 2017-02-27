$('body').on('mouseover mouseout click',function(e){
    //console.log(e.target)
    var object = e.target;
    if(object.className=="img-wrapp-z-index"){
        $(object).parent().children().eq(2).toggleClass('show');
        $(object).parent().parent().toggleClass('show-scale');
        console.log('hello world');
    }
else if(object.className=="load"&&e.type=="click"){

            var jm= +($(object).text()-1);
            $.get("/ajax/catalogs",
                {m: jm}, function(data){
                    data = $(data);
                    $(".wrap-catalog.rent").html($('.wrap-catalog.rent', data).html());
                });
            console.log('hello load');


    }
    else if(object.className=="loadSale"&&e.type=="click"){
        var j= +($(object).text()-1);
        $.get("/ajax/catalogs",
            {s: j}, function(data){
                data = $(data);
                $(".wrap-catalog.sale").html($('.wrap-catalog.sale', data).html());
            });
        console.log('hello sale');
    }



});
