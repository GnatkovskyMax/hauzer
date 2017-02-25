<?php
$arr = array();
$a = 0;
//$arrName=array();
for ($i = 0; $i < count($data['objects']); $i++){
    $arr[$a] = $data['objects'][$i]['name'] .$data['objects'][$i]['surname'];
    $a ++;
}
$arrForm = array_values(array_unique($arr));
sort($arrForm, SORT_NUMERIC);
for ($i = 0; $i < count($arrForm); $i++):

    ?>
    <option><?= $arrForm[$i]?></option>
<?php endfor;
?>
