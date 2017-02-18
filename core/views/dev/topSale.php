<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 bootstrap-padding-none wrapp-parent">
    <?php
    for ($i = 0; $i < count($data['objectsSale']); $i++):
        ?>
        <div class="img-wrapp col-xs-12 col-sm-12 col-md-3 col-lg-3 bootstrap-padding-none">
            <div class="wrapp-body">
                <div class="top-label"></div>
                <a class="overflow-hidden" href="/manual/object/<?= $data['objectsSale'][$i]{'id'} ?>"><!--element-shadow-->
                    <div class="img-wrapp-z-index">
                    </div>
                    <img src="/assets/img/header2.jpg" >
                    <div class="position ">
                        <h1><?= $data['objectsSale'][$i]{'city'}?> &nbsp; <?=$data['objectsSale'][$i]['street']?> &nbsp; <?=$data['objectsSale'][$i]{'house_number'} ?> </h1>
                        <p>
                            Стоимость:<?= $data['objectsSale'][$i]['price']?>
                        </p>
                        <p>
                            Количество комнат:<?= $data['objectsSale'][$i]['rooms']?>
                        </p>
                        <p>
                            Общая площадь:<?= $data['objectsSale'][$i]['square_meter']?>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    <?php endfor; ?>
</div>
