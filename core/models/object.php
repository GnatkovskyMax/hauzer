<?php
    function findPostById($id){
        $sql = "SELECT * FROM `objects` WHERE id = $id";
        return selectData($sql);
    }

     function getAllObjectInCategory($catId){
        $sql = "SELECT * FROM object WHERE service_id = $catId";
        $result = selectData($sql);

        if($result->num_rows > 0){
            $allObject = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $allObject;
        }else{
            return [];
        }
}
     function findAllForBtn($catId, $service){
         $sql = "SELECT * FROM $catId WHERE `service` = '$service';";
         return selectData($sql);
}
     function findAllFromTableRent($catId, $service, $load){
        $sql = "SELECT * FROM $catId WHERE `service` = '$service' ORDER BY id LIMIT $load, 8 ;";
        return selectData($sql);
}
     /* function allObjects(){
        $allObjects = findAllFromTable($objects);
        var_dump($allObjects);
        return $allObjects;
      }*/


    function findAllObjectTop(){
        $sql = "SELECT * FROM `objects` WHERE objects.top = 'top';";
        return selectData($sql);
    }

     function findAllObjectTopIndex($service){
         $sql = "SELECT `id`,`city`,`district`,`rooms`,`total_area`,`price`,`square_meter`,`top`,`street`,`house_number`, `img` FROM `objects` WHERE objects.top = 'top' AND objects.service = '$service' LIMIT 0,5;";
         return selectData($sql);
     }

    function findAllObjectRecent($service){
        $sql = "SELECT `id`,`city`,`district`,`rooms`,`total_area`,`price`,`square_meter`,`top`,`street`,`house_number` , `img` FROM `objects` WHERE objects.service = '$service' ORDER BY objects.bub_date DESC LIMIT 0,5;";
        return selectData($sql);
    }

     function getIdSegment($num){
         $sql = "SELECT `id`,`agents_id`,`basic_description`,`descriptione`,`bub_date`,`square_meter`,`price`,`rooms`,`total_area`,`area`,`city`,`district`,`street`,`house_number`,`apartament_number`, `service`, `img` ,`img_general`, `lat`, `lng` FROM `objects` WHERE objects.id = '$num';";
         return selectData($sql);
     }

function similarObject($cityOb, $roomOb, $priceOb, $IdOb)
{
    $sql = "SELECT `id`,`city`,`street`,`house_number`,`price`,`rooms`,`total_area`, `img` FROM `objects` WHERE objects.price BETWEEN $priceOb*0.1 AND $priceOb*15 AND objects.service = 'аренда' AND objects.rooms = $roomOb AND  objects.city ='$cityOb' AND objects.id NOT IN ($IdOb);";
    return selectData($sql);
}
    function findFromForm(){
        $sql = "SELECT `city`,`district`,`rooms`,`price`,`total_area`, `service` FROM `objects` WHERE 1;";
        return selectData($sql);
    }

    function objectsOfFilter($arr){
        //var_dump($arr[district]);
        $sql = "SELECT * FROM `objects` WHERE objects.district = $arr[district] AND objects.rooms = $arr[rooms] AND objects.city = $arr[city] AND objects.service = $arr[service];";
        //var_dump($sql);
        return selectData($sql);
    }

    function findFromAdress($city, $street){
        $sql = "SELECT `id`,`city`,`street`,`house_number`,`district`,`rooms`,`price`,`total_area`, `service`, `img` , `img_object`,`square_meter` FROM `objects` WHERE objects.city = '$city' AND objects.street = '$street';";
        return selectData($sql);
    }

function findFromAdressAll($city, $street){
    $sql = "SELECT `id`,`city`,`street`,`house_number`,`district`,`rooms`,`price`,`total_area`, `service`, `img` , `img_object`,`square_meter` FROM `objects` WHERE objects.city = $city AND objects.street = '$street';";
    return selectData($sql);
}

function findAgents ($id){
    $sql = "SELECT * FROM `agents` WHERE id ='$id'";
    return selectData($sql);
}