<?php
  function action_index(){
      echo 'category list';
  }

  function action_object(){
        $ElId = getUrlSegment(2);
        $El = mysqli_fetch_all(getIdSegment($ElId), MYSQLI_ASSOC);;
        $cityOb = $El[0]['city'];
        $roomOb = $El[0]['rooms'];
        $priceOb = $El[0]['price'];
        $IdOb = $El[0]['id'];

        $similarObjects = mysqli_fetch_all(similarObject($cityOb, $roomOb, $priceOb, $IdOb), MYSQLI_ASSOC);
        //var_dump($similarObjects);
        renderView ('object', ['objects' => $El, 'similars' => $similarObjects] );

//      $categoryName = getUrlSegment(2);
//      if (is_null($categoryName)){               !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//          show404page();
//   }
//
//      $result = findCategoryById($categoryName);
//      //var_dump($result);
//
//      if($result->num_rows == 0){
//          show404page();
//      }
//      $categoryData = mysqli_fetch_assoc($result);
//
//      $allObject = getAllObjectInCategory($categoryData['id']);
//
//      renderView('category', ['objects' => $allObject, 'categoryData' => $categoryData]);
  }

  //function action_createObject(){

  //}

  function action_catalogs ()
  {
      $table = 'objects';
      $serviceRent = 'аренда';
      $serviceSale = 'продажа';
      $serviceRentOfDays = 'аренда по суточно';
      $allObjectsRent = mysqli_fetch_all(findAllFromTableRent($table, $serviceRent), MYSQLI_ASSOC);
      $allObjectsSale = mysqli_fetch_all(findAllFromTableRent($table, $serviceSale), MYSQLI_ASSOC);
      $allObjectsRentOfDays = mysqli_fetch_all(findAllFromTableRent($table, $serviceRentOfDays), MYSQLI_ASSOC);
      $allObjectsTop = mysqli_fetch_all(findAllObjectTop(), MYSQLI_ASSOC);
//      $arrService = findService();
//      $arrService = mysqli_fetch_all($arrService, MYSQLI_ASSOC);
////      echo '<pre>';
////      var_dump($arrService);
////      echo '</pre>';
//      for ($i = 0; $i < count($arrService); $i++){
////          echo '<pre>';
////          var_dump($arrService[$i]['service']);
////          echo '</pre>';
//          $objects = findAllFromTableRent($table, $arrService[$i]['service']);
//          $objects = mysqli_fetch_all($objects, MYSQLI_ASSOC);
//         // if($objects[0]['service'])}
//        //if($arrService[$i]['service'] == $arrService[$i]['service']){
//
//        }
//      echo '<pre>';
//      var_dump($allObjectsTop);
//      echo '</pre>';
//      }
      // $allObjects = findAllFromTableRent($table, $service);

      //var_dump($allObjects);
      //$objects = allObjects();

      //var_dump($allObjects);
      //$arrObjects = array();
      //$objectsData = mysqli_fetch_all($allObjects, MYSQLI_ASSOC);
      //while ($objectsData = mysqli_fetch_assoc($allObjects)){
      //foreach ($objectsData as $arrObjects);
      //echo '<pre>';
      //var_dump($objectsData);
      //echo '</pre>';
      renderView('catalogs', ['objects' => $allObjectsRent, 'allObjectsSale' => $allObjectsSale, 'allObjectsRentOfDays' => $allObjectsRentOfDays, 'allObjectsTop' => $allObjectsTop]);
      //var_dump($data['objectsData']);
  }
function action_news ()
{
    $result = mysqli_fetch_all(findAllPosts(), MYSQLI_ASSOC);
    // var_dump($result);
    renderView('news', ['objects' => $result]);
}

function action_post (){
    $ElId = getUrlSegment(2);
    $result = mysqli_fetch_all(getIdNews($ElId ), MYSQLI_ASSOC);
    renderView('post', ['objects' => $result]);
}
function action_about(){
    renderView('about');
}
