/**
 * Created by Max on 18.12.2016.
 */
$(function () {

    $("#range").ionRangeSlider({
        hide_min_max: true,
        keyboard: true,
        min: 0,
        max: 50000,
        from: 2000,
        to: 20000,
        type: 'double',
        step: 1,
        postfix: "грн",
        grid: true
    });

});
$(function () {

    $("#sq_m").ionRangeSlider({
        hide_min_max: true,
        keyboard: true,
        min: 10,
        max: 500,
        from: 15,
        to: 50,
        type: 'double',
        step: 1,
        postfix: "м.кв.",
        grid: true
    });

});