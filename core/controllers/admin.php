<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 21.02.2017
 * Time: 3:13
 */
function action_addObject(){
//if(is_dir('catalog/'.$_POST['address'])){
//    echo 'hello';
//    move_uploaded_file($_FILES["picture"]["tmp_name"], "catalog/".$_POST['genre']."/".time().".jpg");
//    $f = fopen('catalog/file_catalog.php', "a+");
//    fwrite($f,time().".jpg:".$_POST['genre'].":".$_POST['name'].':'.$_POST['author'].':'.$_POST['price']."\n");
//    fclose($f);
//}
//else{
//    $d = opendir('catalog');
//    mkdir('catalog/'.$_POST['genre'],0755,true);
//    $f = fopen('catalog/file_catalog.php', "a+");
//    fwrite($f,time().".jpg:".$_POST['genre'].":".$_POST['name'].':'.$_POST['author'].':'.$_POST['price']."\n");
//    fclose($f);
//    closedir($d);
//    move_uploaded_file($_FILES["picture"]["tmp_name"], "catalog/".$_POST['genre']."/".time().".jpg");
//    echo 'sozdano';
//}
//$h = file('catalog/file_catalog.php');

//foreach($h as $g){
//    $e=explode(':', $g);
////echo  '<p>'.var_dump($e).'</p>';
//    $img = $e[0];
//    $genre = $e[1];
//    $name = $e[2];
//    $author = $e[3];
//    $price = $e[4];
//    echo '<img src = "catalog/'.$genre.'/'.$img.'">';
//    echo '<p>'.$name.'</p>';
//    echo '<p>'.$author.'</p>';
//    echo '<p>'.$price.'</p>';
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
    $d = opendir("catalog");
    mkdir('catalog/'.$last,0755,true);
    $opendir= opendir('catalog/'.$last);
    $f = fopen('catalog/file_catalog.php', "a+");
    for($i=0;!empty($_FILES["image$i"]);$i++){
        if(+$_POST['general']==$i ){$g='general';
            $img_general= "/catalog/$last/".$g.time().$_FILES["image$i"]["name"];
        }
        else{$g='';
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


       // echo 'sozdano';
         //FILES['image']["tmp_name"]
        ////////////////////////////
//        $jj=$_POST['street'];
//        $xml = simplexml_load_file("http://maps.google.com/maps/api/geocode/xml?address=$jj");
//        $status = $xml->status;
//        $lat = $xml->result->geometry->location->lat;
//        $lng = $xml->result->geometry->location->lng;
//        echo $lat.'+'.$lng;
        //////////////////////////////
//        $h = $_POST['image']
//        ?>
<!--        <p>--><?php //$h ?><!--</p>-->
<!---->
<!--        --><?php
//        $imagine = new Imagine\Gd\Imagine();
//        $size  = new Imagine\Image\Box(250, 170);
////        $imagine->open("assets/img/$h")->thumbnail($size, 'inset')->save
////        ("assets/img/kkk_$h");
////        $info= pathinfo($h);
////        var_dump($info['dirname']);
//        $watermark = $imagine->open("assets/img/hauzer_2017_watermark.png");
//        $image     = $imagine->open("assets/img/$h");
//        //$size      = $image->getSize();
//        $wSize     = $watermark->getSize();
//
//        $bottomRight = new Imagine\Image\Point($size->getWidth() - $wSize->getWidth(), $size->getHeight() - $wSize->getHeight());
//        $image->paste($watermark, $bottomRight)->save
//        ("assets/img/$h");
    } else {
        renderView('dev/addObject');
    }
}