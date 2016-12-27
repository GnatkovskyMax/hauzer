<?php
$arr = array();
$a = 0;
for ($i = 0; $i < count($data['objectsFilter']); $i++){
    $arr[$a] = $data['objectsFilter'][$i]['city'];
    $a ++;
}
array_unshift($arr, 'Киев');
$arrForm = array_values(array_unique($arr));
for ($i = 0; $i < count($arrForm); $i++):

    ?>

    <option  value="<?=$i ?>"  href="/main/index/<?= $i ?>"><?= $arrForm[$i]?></option>

<?php endfor; ?>