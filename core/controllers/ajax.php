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
function action_delete (){
    if (!empty($_POST['id'])) {
        deleatObject($_POST['id']);
    }
}
function action_catalogs(){
    $m=(!empty($_GET['m'])) ? $_GET['m'] : 0;
    $s=(!empty($_GET['s'])) ? $_GET['s'] : 0;

    $table = 'objects';
    $serviceRent = 'аренда';
    $serviceSale = 'продажа';
    $serviceRentOfDays = 'аренда по суточно';
    $allObjectsRentForBtn = mysqli_fetch_all(findAllForBtn($table, $serviceRent), MYSQLI_ASSOC);
    $allObjectsSaleForBtn = mysqli_fetch_all(findAllForBtn($table, $serviceSale), MYSQLI_ASSOC);
    $objects = mysqli_fetch_all(findAllFromTableRent($table, $serviceRent,$m), MYSQLI_ASSOC);
    $allObjectsSale = mysqli_fetch_all(findAllFromTableRent($table, $serviceSale,$s), MYSQLI_ASSOC);
    $allObjectsRentOfDays = mysqli_fetch_all(findAllFromTableRent($table, $serviceRentOfDays,$m), MYSQLI_ASSOC);
    $allObjectsTop = mysqli_fetch_all(findAllObjectTop(), MYSQLI_ASSOC);
    $objectsFilter = mysqli_fetch_all(findFromForm(), MYSQLI_ASSOC);
//          echo '<pre>';
//          var_dump($allObjectsTop);
//          echo '</pre>';

    renderView('catalogs', ['objects' => $objects, 'allObjectsSale' => $allObjectsSale, 'allObjectsRentOfDays' => $allObjectsRentOfDays, 'allObjectsTop' => $allObjectsTop, 'filter' => $objectsFilter,'btnRent'=>$allObjectsRentForBtn,'btnSale'=>$allObjectsSaleForBtn ]);

}