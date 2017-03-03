<?php

function action_login(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $login = valid_adress(htmlspecialchars(trim($_POST['login'])));
        $password = valid_adress(htmlspecialchars(trim($_POST['password'])));
        $resEntranceAdmin = entranceAdmin($login, $password);
        if($resEntranceAdmin -> num_rows === 0){
            echo "Incorect login or password";
        }else{
            $_SESSION['user'] = mysqli_fetch_assoc($resEntranceAdmin);
            header('location: /admin/admin');
        }
    }
    renderView('login');
}
function action_admin(){
    if(is_auth()){
        $arrService = ['Аренда','Продажа','Сдано','Продано'];
        $adminCountObgect = array();
        $i = 0;
        foreach ($arrService as $value){
            $res = count(mysqli_fetch_all(adminCountObgect($value), MYSQLI_ASSOC));
                $adminCountObgect[$i][$value] = $res;
                $i++;
        }
        $adminObjects = mysqli_fetch_all(selectObjects(), MYSQLI_ASSOC);
        $adminCountObgect[4]['all'] =count($adminObjects);
        renderView('admin', ['objects' => $adminObjects, 'count' => $adminCountObgect]);
    }else{
        header('location: /');
    }
}
function action_logaut(){
    session_unset();
    session_destroy();
    header('location: /');
}

function action_addObject(){
    require '/vendor/autoload.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $address=$_POST['city'].' '.$_POST['street'].' '.$_POST['house_number'];
        $xml = simplexml_load_file("http://maps.google.com/maps/api/geocode/xml?address=$address");
        $status = $xml->status;
        $lat =$xml->result->geometry->location->lat;
        $lng =$xml->result->geometry->location->lng;
        $formData = [
            //'author-id'=> $_SESSION['user']['id'],
            'basic_description' => getSaveData(trim($_POST['basic_description'])),
            'description' => getSaveData(trim($_POST['description'])),
            'square_meter' => +(getSaveData(trim($_POST['square_meter']))),
            'price' => +(getSaveData(trim($_POST['price']))),
            'rooms' => +(getSaveData(trim($_POST['rooms']))),
            'total_area' => +(getSaveData(trim($_POST['total_area']))),
            'area' => +(getSaveData(trim($_POST['area']))),
            'city' => getSaveData(trim($_POST['city'])),
            'district' => getSaveData(trim($_POST['district'])),
            'street' => getSaveData(trim($_POST['street'])),
        'house_number' => +(getSaveData(trim($_POST['house_number']))),
        'apartament_number' => getSaveData(trim($_POST['apartament_number'])),
        'floor' => +(getSaveData(trim($_POST['floor'])))
        ];
        if($_POST['service']=='rent'){
            $service='Аренда';
        }else if($_POST['service']=='sale'){
            $service='Продажа';
        }else if($_POST['service']=='rent_hours'){
            $service='Аренда по суточно';
        }
        if($_POST['top']=='on'&&$_FILES["img_top"]["name"]!=''){
            $top="TOP";
        }else{
            $top="NULL";
        }
        $sql1="INSERT INTO `objects`( `agents_id`, `service_id`, `type_of_room_id`,
        `basic_description`, `descriptione`,`square_meter`, `price`, `rooms`,
        `total_area`, `area`, `city`, `district`,`street`, `house_number`,  
        `apartament_number`, `top`, `service`, `floor` , `lat` ,`lng`) VALUES (1,0,0,
   '{$formData['basic_description']}','{$formData['description']}',
    {$formData['square_meter']},{$formData['price']}, {$formData['rooms']},
     {$formData['total_area']}, {$formData['area']}, '{$formData['city']}',
   '{$formData['district']}', '{$formData['street']}', '{$formData['house_number']}',
   {$formData['apartament_number']},
    \"$top\", \"$service\", {$formData['floor']},$lat,$lng)";
        $res=insertUpdateDelate($sql1);
    $sql="SELECT max(id) FROM `objects`";
        $res2= selectData($sql);
        $last=mysqli_fetch_assoc($res2)['max(id)'];
        echo 'последний:'.$last;
if($res==true&&$_FILES["image0"]["name"]!=''){
    $img='';
    $g='';
    $d = opendir("catalog");
    mkdir('catalog/'.$last,0755,true);
    $opendir= opendir('catalog/'.$last);
    $f = fopen('catalog/file_catalog.php', "a+");
    for($i=0;!empty($_FILES["image$i"]);$i++){
        if($_POST['general'] != NULL ){
            if(+$_POST['general']==$i ){
                $g='general';
                $img_general= "/catalog/$last/".$g.time().$_FILES["image$i"]["name"];
            }else{$g='';
                $img= $img."/catalog/$last/".$g.time().$_FILES["image$i"]["name"].' ,';
            }
        }else{$g='';
            $img= $img."/catalog/$last/".$g.time().$_FILES["image$i"]["name"].' ,';
        }

        $name_files = "catalog/$last/".$g.time().$_FILES["image$i"]["name"];
 move_uploaded_file($_FILES["image$i"]["tmp_name"], $name_files);
 fwrite($f,$g.time().$_FILES["image$i"]["name"].":".$_POST["alt$i"]."\n");
        $imagine = new Imagine\Gd\Imagine();
        $size  = new Imagine\Image\Box(600, 450);
//        $imagine->open("catalog/$last/".$g.time().$_FILES["image$i"]["name"])->thumbnail($size, 'inset')->save
//        ("catalog/$last/".$g.time().$_FILES["image$i"]["name"]);
        $watermark = $imagine->open("assets/img/hauzer_2017_watermark.png");
        $image     = $imagine->open($name_files)->thumbnail($size);
        $wSize     = $watermark->getSize();
        $bottomRight = new Imagine\Image\Point(50,50);//$size->getWidth() - $wSize->getWidth(), $size->getHeight() - $wSize->getHeight()
        $image->paste($watermark, $bottomRight)->save
        ($name_files);
    }

    if($_POST['top']=='on'&&$_FILES["img_top"]["name"]!=''){
        echo $img_top = "/catalog/$last/top".time().$_FILES["img_top"]["name"];
        $name_files_top = "catalog/$last/top".time().$_FILES["img_top"]["name"];
        move_uploaded_file($_FILES["img_top"]["tmp_name"], $name_files_top);
        //fwrite($f,'top'.time().$_FILES["img_top"]["name"].":".$_POST["alt_top"]."\n");
        $imagine = new Imagine\Gd\Imagine();
        $size  = new Imagine\Image\Box(1000, 700);
        $watermark = $imagine->open("assets/img/hauzer_2017_watermark.png");
        $image     = $imagine->open($name_files_top)->thumbnail($size);
        //$wSize     = $watermark->getSize();
        $bottomRight = new Imagine\Image\Point(50,50);//$size->getWidth() - $wSize->getWidth(), $size->getHeight() - $wSize->getHeight()
        $image->paste($watermark, $bottomRight)->save
        ($name_files_top);

    }
    fclose($f);
    closedir($opendir);
    closedir($d);
    $img = substr($img, 0, -1);
    $sql2=" UPDATE `objects` SET `img`=\"$img\",`img_general`= \"$img_general\",`img-top`=\"$img_top\" WHERE `id`= $last";
    $res2=insertUpdateDelate($sql2);
    if($res2){
        echo "<p>Обьект добавлен успешно!</p>";
    }
    }else{
    echo 'vvedite vse';
}
    } else {
        renderView('dev/addObject');
    }
}

