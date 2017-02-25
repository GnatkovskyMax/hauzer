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
    renderView('addObject');
}
