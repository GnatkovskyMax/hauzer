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
        $recentSale = mysqli_fetch_all(findAllObjectRecent($serviceSale), MYSQLI_ASSOC);
//        var_dump($recentSale);
        $topRent = mysqli_fetch_all(findAllObjectTopIndex($serviceRent), MYSQLI_ASSOC);
        $topSale = mysqli_fetch_all(findAllObjectTopIndex($serviceSale), MYSQLI_ASSOC);
        renderView('index', ['objectsRent' => $topRent, 'objectsSale' => $topSale, 'filter' => $objectsFilter, 'recentRent' =>$recentRent, 'recentSale' =>$recentSale]);
    }

    function action_contact(){
        echo 'Index page 1';}

    function action_category(){
        renderView('category');
    }
//    function action_send(){
//        echo json_encode($_POST);
//    }

    //function action_object(){
    //renderView('object');
    //} function action_admin(){
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // TODO Обработать данные
}
//renderView('actionAdmin');
