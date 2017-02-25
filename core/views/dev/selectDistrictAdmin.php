<?php
for ($i = 0; $i < count($data['objects']); $i++):
    ?>
    <option><?= $data['objects'][$i]['district']?></option>
<?php endfor;
?>