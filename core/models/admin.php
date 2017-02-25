<?php
function entranceAdmin($login, $password){
    $sql = "SELECT 'id' FROM `system` WHERE login = '$login' and password = '$password'";
    return selectData($sql);
}

function selectObjects(){
    $sql = "SELECT objects.id, objects.bub_date, objects.total_area, objects.service, objects.district, objects.price, objects.rooms, objects.city, objects.street, agents.name, agents.surname FROM objects, agents WHERE objects.agents_id = agents.id";
    return selectData($sql);

}

function adminCountObgect($service){
    $sql = "SELECT objects.id FROM objects WHERE objects.service = '$service'";
    return selectData($sql);
}

function deleatObject($id){
    var_dump($id);
    $sql = "DELETE  FROM `objects` WHERE objects.id = $id;";
    return selectData($sql);
}
