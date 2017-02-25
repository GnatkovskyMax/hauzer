<div class="opacity "></div>
<div class="show-hide"><div class="cross-line"></div></div>
<div id="dbMyLatLng" style="display:none">
<?php
for($i=0;$i<=count($data['objects']);$i++):?>

    <p>  <?= $data['objects'][$i]['lat']?>, <?= $data['objects'][$i]['lng']?> , <?= $data['objects'][$i]['square_meter']?>, <?= $data['objects'][$i]['price']?>,
<?= $data['objects'][$i]['rooms']?>, <?=$data['objects'][$i]['city']?>, <?=$data['objectsSale'][$i]['street']?>,
        <?=$data['objects'][$i]{'house_number'}?></p>
    <?php endfor;?>
</div>


<div id="map" >

</div>
