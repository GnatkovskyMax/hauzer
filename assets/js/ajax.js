/**
 * Created by Max on 15.01.2017.
 */
$(window).on('load', function(){

    $('.load').on('click', function(){
        console.log($(this).val());
        var jm= +($(this).text());
        $.get("/manual/catalogs",
            {m: jm}, function(html){
                $("body").html(html);
            });
    });
});