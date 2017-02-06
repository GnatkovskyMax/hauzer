<?php
if ($_POST){
    $mail = new PHPMailer;

    $mail -> isSMTP();

    $mail -> Host = 'smtp.mail.ru';
    $mail->CharSet = 'UTF-8';
    $mail ->SMTPAuth = true;
    $mail -> Username = 'hauzer2017';
    $mail -> Password = 'qwerty!@#$%';
    $mail -> SMTPSecure = 'ssl';
    $mail->Port = '465';
    $mail -> From = 'hauzer2017.mail.ru';
    $mail -> FromName = 'test';
    $mail -> addAddress('artem.yarin@mail.ru', 'Артём');
    $mail -> Subject = 'Новое письмо';
    $mail -> Body = "Имя: {$_POST['name']}<br>Email: {$_POST['email']}<br>Телефон: {$_POST['tel']}";

    if ($mail->send()){
        $answer = 1;
    }else{
        $answer = 0;
    }
    die($answer);
}


?>

<script>
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
</script>
