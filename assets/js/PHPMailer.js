$(function () {
    $('#contact').submit(function () {
        var errors = false;
        $(this).find('span').empty();
        $(this).find('input').each(function () {
            if($.trim($(this).val()) == ''){
                errors = true;
                $(this).next().text('Не заполнено поле');
            }

        });

        if(!errors) {
            var data = $('#contact').serialize();
            $.ajax ({
                url: '/main/send',
                type: 'POST',
                data: data,
                success: function () {
                    alert ('Письмо успешно отправлено!');
                },
                error: function () {
                    alert('Ошибка');
                }
            });
        }
        return false;
    });
});

