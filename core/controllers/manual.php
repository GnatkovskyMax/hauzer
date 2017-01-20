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
      if (count($_GET)>5){
          $arr = array_slice($_GET, 1);
          //$arr = array_diff($arr, array(''));

//          if(!empty($arr['search-id'])){
//              $id = $arr['search-id'];
//              $IdObjects = mysqli_fetch_all(findPostById($id), MYSQLI_ASSOC);
//              renderView('catalogs', ['objects' => $IdObjects]);
//          }else{
//              $objects = mysqli_fetch_all(objectsOfFilter($arr), MYSQLI_ASSOC);
//              $objectsFilter = mysqli_fetch_all(findFromForm(), MYSQLI_ASSOC);
//              $allObjectsTop = mysqli_fetch_all(findAllObjectTop(), MYSQLI_ASSOC);
//              renderView('catalogs', ['objects' => $objects, 'objectsFilter' => $objects, 'allObjectsTop' => $allObjectsTop, 'filter' => $objectsFilter]);


//          }else{
          if (empty(!$arr['search-id'])){
              $objects = mysqli_fetch_all(findPostById ($arr['search-id']), MYSQLI_ASSOC);
              renderView('object', ['objects' => $objects]);
          }

          $objects = mysqli_fetch_all(objectsOfFilter($arr), MYSQLI_ASSOC);
          $objectsFilter = mysqli_fetch_all(findFromForm(), MYSQLI_ASSOC);
          $allObjectsTop = mysqli_fetch_all(findAllObjectTop(), MYSQLI_ASSOC);
          renderView('catalogs', ['objects' => $objects, 'objectsFilter' => $objects, 'allObjectsTop' => $allObjectsTop, 'filter' => $objectsFilter,'btnRent'=>$allObjectsRentForBtn ]);
      }else{
          $m=(!empty($_GET['m'])) ? $_GET['m'] : 0;
          $s=(!empty($_GET['s'])) ? $_GET['s'] : 0;

          $table = 'objects';
          $serviceRent = 'аренда';
          $serviceSale = 'продажа';
          $serviceRentOfDays = 'аренда по суточно';
          $allObjectsRentForBtn = mysqli_fetch_all(findAllForBtn($table, $serviceRent), MYSQLI_ASSOC);
          $allObjectsSaleForBtn = mysqli_fetch_all(findAllForBtn($table, $serviceSale), MYSQLI_ASSOC);
          $objects = mysqli_fetch_all(findAllFromTableRent($table, $serviceRent,$m), MYSQLI_ASSOC);
          $allObjectsSale = mysqli_fetch_all(findAllFromTableRent($table, $serviceSale,$s), MYSQLI_ASSOC);
          $allObjectsRentOfDays = mysqli_fetch_all(findAllFromTableRent($table, $serviceRentOfDays,$m), MYSQLI_ASSOC);
          $allObjectsTop = mysqli_fetch_all(findAllObjectTop(), MYSQLI_ASSOC);
          $objectsFilter = mysqli_fetch_all(findFromForm(), MYSQLI_ASSOC);
//          echo '<pre>';
//          var_dump($allObjectsTop);
//          echo '</pre>';

          renderView('catalogs', ['objects' => $objects, 'allObjectsSale' => $allObjectsSale, 'allObjectsRentOfDays' => $allObjectsRentOfDays, 'allObjectsTop' => $allObjectsTop, 'filter' => $objectsFilter,'btnRent'=>$allObjectsRentForBtn,'btnSale'=>$allObjectsSaleForBtn ]);
      }

      //var_dump($_GET);
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
//      renderView('catalogs', ['objects' => $allObjectsRent, 'allObjectsSale' => $allObjectsSale, 'allObjectsRentOfDays' => $allObjectsRentOfDays, 'allObjectsTop' => $allObjectsTop, 'objectsFilter' => $objects]);
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

//function objectsFromFilter(){
//    $table = 'objects';
//    $objects = mysqli_fetch_all(findAllFromTable($table), MYSQLI_ASSOC);
//    var_dump($objects);
//    renderView('index', ['objects' => $objects]);
//}

function SearchByFilter (){
    if (count($_GET)>5){
        $arr = array_slice($_GET, 2);
        //var_dump($arr);
        return $arr;
       renderView('catalogs', $arr);
//        $result = objectsOfFilter()
    }
}
