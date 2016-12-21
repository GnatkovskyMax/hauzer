<?php
function findAllPosts(){
    $sql = "SELECT * FROM `post` WHERE 1";
    return selectData($sql);
}

function getIdNews($num){
    $sql = "SELECT * FROM `post` WHERE post.id = '$num';";
    return selectData($sql);
}

?>