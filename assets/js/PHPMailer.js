$(function () {
    $('#contact').submit(function () {
        var errors = false;
        $(this).find('span').empty();
        $(this).find('input').each(function () {
            if($.trim($(this).val()) == ''){
                errors = true;
                // $(this)
            }
        });
        if(!errors){
            var data = $('#contact').serialize();
            $.ajax({
                url: 'index.php',
                type: 'POST',
                data: data,
                beforeSend: function () {
                    $('#submit').next().text('Отправляю...');
                },
                success: function (rez) {
                    if(rez == 1){
                        $('#contact').find('input:not(#submit)').val('');
                    }else{
                        $('#submit').next().empty();
                        alert('Ошибка отправки сообщения');
                    }
                },
                error: function () {
                    alert('Ошибка');
                }
            });
        }
        alert(yes);
        return false;
    });
});
