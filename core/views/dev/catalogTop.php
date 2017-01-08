<?php
for ($i = 0; $i < count($data['allObjectsTop']); $i++):
    ?>
<div class="slider-block">
<img src="/assets/img/<?= $data['allObjectsTop'][$i]{'img'} ?>.jpg">
    <section class="block"> <!--!!!!!!!!!!!!!!!!!-->
        <div class="disp vip-description">
            <h1><?= $data['allObjectsTop'][$i]['city'] ?> <?= $data['allObjectsTop'][$i]['district'] ?> район</h1>
            <h2><?= $data['allObjectsTop'][$i]['service'] ?></h2>
            <p class="vip-adres"> <?= $data['allObjectsTop'][$i]['basic_description'] ?></p>
            <p>Комнат:<?= $data['allObjectsTop'][$i]['rooms'] ?> Общая площадь: <?= $data['allObjectsTop'][$i]['total_area'] ?></p>
        </div>
        <div class="disp price-vip">
            <p><?= $data['allObjectsTop'][$i]['price'] ?> грн</p>
            <span><?= $data['allObjectsTop'][$i]['square_meter'] ?> грн м.кв</span>
        </div>
        <a href="/manual/object/<?= $data['allObjectsTop'][$i]{'id'} ?>">Подробние</a>
    </section>
</div>
<?php endfor; ?>
