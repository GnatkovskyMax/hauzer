<?php
    function findCategoryById($id){

        $sql = "SELECT * FROM service WHERE id = $id";

        return selectData($sql);
        //var_dump(selectData($sql));
    }