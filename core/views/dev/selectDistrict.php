<?php
$arr = array();
$a = 0;
for ($i = 0; $i < count($data['filter']); $i++){
    $arr[$a] = $data['filter'][$i]['district'];
    $a ++;
    $arrForm = array_values(array_unique($arr));
}
for ($i = 0; $i < count($arrForm); $i++):

?>

    <option value="'<?=$arrForm[$i]?>'"><?= $arrForm[$i]?></option>

<?php endfor; ?>