<?php
$jj='м дружбы народов киев';
$xml = simplexml_load_file("http://maps.google.com/maps/api/geocode/xml?address=$jj");
$status = $xml->status;
$lat = $xml->result->geometry->location->lat;
$lng = $xml->result->geometry->location->lng;
?>
<div class="opacity"></div>
<div class="show-hide"><div class="cross-line"></div></div>
<div id="dbMyLatLng" style="display:none">
    <p> <?= $lat?> , <?=$lng?> , m.</p>
    <p>-21.397, 150.644, zakrevskogo</p>
    <p>-22.397, 150.644, otradnyi</p>
    <p>-23.397, 150.644, nayki</p>
    <p>-24.397, 150.644, vozdyhoflotskiy</p>
</div>


<div id="map" >

</div>
