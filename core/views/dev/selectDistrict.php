<?php
$arr = array();
$a = 0;
for ($i = 0; $i < count($data['objectsFilter']); $i++){
    $arr[$a] = $data['objectsFilter'][$i]['district'];
    $a ++;
    $arrForm = array_values(array_unique($arr));
}
for ($i = 0; $i < count($arrForm); $i++):

?>

    <option value="<?=$i ?>"><?= $arrForm[$i]?></option>

<?php endfor; ?>