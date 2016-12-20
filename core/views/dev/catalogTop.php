<?php
for ($i = 0; $i < count($data['objects']); $i++):
    ?>

<img src="/assets/img/img_slider_catalog/1.jpg">
    <section class="block"> <!--!!!!!!!!!!!!!!!!!-->
        <div class="disp vip-description">
            <h1>Какое то описание</h1>
            <p class="vip-adres"> <?= $data['objects'][$i]['city'] ?> <?= $data['objects'][$i]['objects'] ?></p>
            <p>Комнат:<?= $data['objects'][$i]['rooms'] ?> Общая площадь: <?= $data['objects'][$i]['total_area'] ?></p>
        </div>
        <div class="disp price-vip">
            <p><?= $data['objects'][$i]['price'] ?> грн</p>
            <span><?= $data['objects'][$i]['square_meter'] ?> грн м.кв</span>
        </div>
        <a href="#">Подробние</a>
    </section>
<?php endfor; ?>
