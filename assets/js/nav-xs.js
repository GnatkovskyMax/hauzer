function showHide(){
    $('.nav-wrapp').toggleClass('view-menu');

}
function hide(){
    $('.nav-wrapp').addClass('view-menu');
}
$('.navxs').on('click',showHide);
$('.hide-menu').on('click',hide);


