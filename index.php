<?php
    session_start();
    require_once 'core/library/main.php';
    require_once 'core/library/db.php';
    require_once 'core/library/main.php';
    require_once 'core/models/category.php';
    require_once 'core/models/object.php';
    require_once 'core/views/dev/header.php';
    require_once 'core/models/news.php';
    /*$url = $_GET['url'];

    $urlSegments = explode('/', $url);
    $cntrName = (empty($urlSegments[0])) ? 'main' : $urlSegments[0];
    $actionName = (empty($urlSegments[1])) ? 'action_index' : 'action_'.$urlSegments[1];

    if (file_exists('core/controllers/'.$cntrName.'.php')){
        require_once 'core/controllers/'.$cntrName.'.php';

        if (function_exists($actionName)){
            $actionName();
        }else{
            echo '111';
        }
    }*/
    $cntrName = (is_null(getUrlSegment(0))) ? 'main': getUrlSegment(0);
    //var_dump(getUrlSegment(1));
    $actionName = (is_null(getUrlSegment(1))) ? 'action_index' : 'action_'.getUrlSegment(1);
    //var_dump(getUrlSegment(2));
    //$actionNameId = (is_null(getUrlSegment(2))) ? '' : $idEl = getUrlSegment(2);
    //var_dump($idEl);
    if (file_exists('core/controllers/'.$cntrName.'.php')){
        require_once 'core/controllers/'.$cntrName.'.php';
        if (function_exists($actionName)){
            $actionName();
        }
        else{
            show404page();
        }
//        if (function_exists($actionNameId)){
//            $actionNameId($actionNameId);
//        }
    }else{
        show404page();
    }
//
//
require_once 'core/views/dev/footer.php';
    connectToDb();


