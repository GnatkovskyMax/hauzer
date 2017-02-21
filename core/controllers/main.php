<?php
    function action_index(){
        $serviceRent = 'Аренда';
        $serviceSale = 'Продажа';
//        $objects = mysqli_fetch_all(findAllFromTable('objects'), MYSQLI_ASSOC);
        $objectsFilter = mysqli_fetch_all(findFromForm(), MYSQLI_ASSOC);
//        $arr = array();
//        $a = 0;
//        for ($i = 0; $i < count($objects); $i++){
//            $arr[$a] = $objects[$i]['district'];
//            $a ++;
//        }
//        $aarr = array_unique($arr);
//        echo '<pre>';
////        var_dump($aarr);
//        echo '</pre>';

//        $object = array_unique ($objects);
//        var_dump($object);
//        $arr = array();
//        $a = 0;
//        for ($i = 0; $i < count($objects); $i++){
//            $arr[$a] = $objects[$i]['city'];
//            $a ++;
//
//            //$arrForm = array_values(array_unique($arr));
//        }
//        //var_dump($arr);
//        $arra = array_unshift($arr, "Киев");
//        var_dump($arr);
        $recentRent = mysqli_fetch_all(findAllObjectRecent($serviceRent), MYSQLI_ASSOC);
        $recentSale = mysqli_fetch_all(findAllObjectRecent($serviceRent), MYSQLI_ASSOC);
        $topRent = mysqli_fetch_all(findAllObjectTopIndex($serviceRent), MYSQLI_ASSOC);
        $topSale = mysqli_fetch_all(findAllObjectTopIndex($serviceSale), MYSQLI_ASSOC);
        renderView('index', ['objectsRent' => $topRent, 'objectsSale' => $topSale, 'filter' => $objectsFilter, 'recentRent' =>$recentRent, 'recentSale' =>$recentSale]);
    }

    function action_contact(){
        echo 'Index page 1';}

    function action_category(){
        renderView('category');
    }

    //function action_object(){
    //renderView('object');
    //} function action_admin(){
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // TODO Обработать данные
}
function action_addObject(){
//if(!empty($_POST[''])&&is_dir('catalog/'.$_POST['address'])){
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
        $h = $_POST['image']
        ?>
       <p><?php $h ?></p>

        <?php
        $imagine = new Imagine\Gd\Imagine();
        $size  = new Imagine\Image\Box(250, 170);
//        $imagine->open("assets/img/$h")->thumbnail($size, 'inset')->save
//        ("assets/img/kkk_$h");
//        $info= pathinfo($h);
//        var_dump($info['dirname']);
        $watermark = $imagine->open("assets/img/hauzer_2017_watermark.png");
        $image     = $imagine->open("assets/img/$h");
        //$size      = $image->getSize();
        $wSize     = $watermark->getSize();

        $bottomRight = new Imagine\Image\Point($size->getWidth() - $wSize->getWidth(), $size->getHeight() - $wSize->getHeight());
        $image->paste($watermark, $bottomRight)->save
    ("assets/img/$h");
     //var_dump($image->copy()) ;//<img src='/assets/img/lll.png'>
     //var_dump($image->copy()) ;//<img src='/assets/img/lll.png'>
    } else {
      renderView('dev/addObject');
    }
}
?>



