<?php
    function action_index(){
        $serviceRent = 'аренда';
        $serviceSale = 'Продажа';
        $topRent = mysqli_fetch_all(findAllObjectTopIndex($serviceRent), MYSQLI_ASSOC);
        $topSale = mysqli_fetch_all(findAllObjectTopIndex($serviceSale), MYSQLI_ASSOC);
        renderView('index', ['objectsRent' => $topRent, 'objectsSale' => $topSale]);
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
//renderView('actionAdmin');



