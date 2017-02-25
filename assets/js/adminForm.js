/**
 * Created by Max on 21.02.2017.
 */
$('.addFile').on('click', function(){
   var file = '<label><input type="file" name="image" class="file"><input type="radio" name="general" value="0"><input type="text" name="alt" placeholder="Введите Альт-атрибут для картинки"></label>';
    $( file ).insertAfter( $(this).prev() );
    for(var i=0;$('.file').length>i;i++){
        console.log($('.file').eq(i).attr('name','image'+i).next().attr('value', i).next().attr('name','alt'+i));
    }

});
$('.for_top_img').change( function(){

    if(!$('label').is('.img_top')){
        alert('hhh'); $('<label class="img_top">Добавить фотографию для слайдера<input type="file" name="img_top"></label></br>').insertAfter($(this));

    }else{
        $('.img_top').remove();
    }

});
