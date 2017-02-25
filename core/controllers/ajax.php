<?php
function action_send(){
    if (!empty($_POST)) {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.mail.ru';
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->Username = 'hauzer2017';
        $mail->Password = 'qwerty!@#$%';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';
        $mail->From = 'hauzer2017@mail.ru';
        $mail->FromName = 'Новая заявка';
        $mail->addAddress('artem.yarin@mail.ru', 'Артём');
        $mail->Subject = 'Новое письмо';
        $mail->Body = "Имя: {$_POST['name']}
    Email: {$_POST['email']}
    Телефон: {$_POST['tel']}";
        if ($mail->send()) {
            echo 'Письмо отправлено!';
            $answer = 1;
        } else {
            echo $mail->ErrorInfo;
            $answer = 0;
        }
        die($answer);
    }
}
function action_delete ()
{
    if (!empty($_POST)) {
      // var_dump($_POST['id']);
        deleatObject($_POST['id']);
    }
}