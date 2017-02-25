
<div class=" bootstrap-padding-none wrapp-parent col-xs-12 col-sm-12 col-md-5 col-lg-5 recent">
    <?php

    for ($i = 0; $i < count($data['recentSale']); $i++):
        ?>
        <div class="img-wrapp col-md-4">
            <a class="" href="/manual/object/<?= $data['recentSale'][$i]{'id'} ?>"><!--element-shadow-->
                <img class="img-responsive" src="/assets/img/<?=$data['recentSale'][$i]{'img'}?>.jpg" >
                <div class="position ">
                    <h1><?= $data['recentSale'][$i]{'city'}?> &nbsp; <?=$data['recentSale'][$i]['street']?> &nbsp; <?=$data['recentSale'][$i]{'house_number'} ?> </h1>
                    <p>
                        Стоимость:<?= $data['recentSale'][$i]['price']?>
                    </p>
                    <p>
                        Количество комнат:<?= $data['recentSale'][$i]['rooms']?>
                    </p>
                    <p>
                        Общая площадь:<?= $data['recentSale'][$i]['square_meter']?>
                    </p>
                </div>
            </a>
        </div>
            <?php
//    for ($i = 0; $i < count($data['objectsSale']); $i++):
//        ?>
<!--        <div class="img-wrapp col-xs-12 col-sm-12 col-md-4 col-lg-4">-->
<!--            <div class="wrapp-body">-->
<!--                <a class="" href="/manual/object/--><?//= $data['objectsSale'][$i]{'id'} ?><!--"><!--element-shadow-->-->
<!--                    <img  src="/assets/img/header2.jpg" >-->
<!--                    <div class="position-recent">-->
<!--                        <h1>--><?//= $data['objectsSale'][$i]{'city'}?><!-- &nbsp; --><?//=$data['objectsSale'][$i]['street']?><!-- &nbsp; --><?//=$data['objectsSale'][$i]{'house_number'} ?><!-- </h1>-->
<!--                        <p>-->
<!--                            Стоимость:--><?//= $data['objectsSale'][$i]['price']?>
<!--                        </p>-->
<!--                        <p>-->
<!--                            Количество комнат:--><?//= $data['objectsSale'][$i]['rooms']?>
<!--                        </p>-->
<!--                        <p>-->
<!--                            Общая площадь:--><?//= $data['objectsSale'][$i]['square_meter']?>
<!--                        </p>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!---->
<!--        </div>-->
    <?php endfor;
    ?>
</div>