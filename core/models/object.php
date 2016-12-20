<?php
    function findPostById($id){
        $sql = "SELECT id FROM object WHERE id = $id";
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

     function findAllFromTableRent($catId, $service){
        $sql = "SELECT `id`,`square_meter`,`price`,`rooms`,`city`,`street`,`house_number`, `service` FROM $catId WHERE `service` = '$service';";
        return selectData($sql);
}
     /* function allObjects(){
        $allObjects = findAllFromTable($objects);
        //var_dump($allObjects);
        return $allObjects;
      }*/


    function findAllObjectTop(){
        $sql = "SELECT `id`,`city`,`district`,`rooms`,`total_area`,`price`,`square_meter`,`top` FROM `objects` WHERE objects.top = 'top';";
        return selectData($sql);
    }

     function findAllObjectTopIndex($service){
         $sql = "SELECT `id`,`city`,`district`,`rooms`,`total_area`,`price`,`square_meter`,`top`,`street`,`house_number` FROM `objects` WHERE objects.top = 'top' AND objects.service = '$service';";
         return selectData($sql);
     }

     function getIdSegment($num){
         $sql = "SELECT `basic_description`,`descriptione`,`bub_date`,`square_meter`,`price`,`rooms`,`total_area`,`area`,`city`,`district`,`street`,`house_number`,`apartament_number` FROM `objects` WHERE objects.id = '$num';";
         return selectData($sql);
     }