<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 bootstrap-padding-none wrapp-parent">
            <?php
            for ($i = 0; $i < count($data['objectsRent']); $i++):
                ?>
                <div class="img-wrapp col-xs-12 col-sm-12 col-md-3 col-lg-3 bootstrap-padding-none">
                    <div class="wrapp-body">
                        <div class="top-label"></div>
                    <a class="overflow-hidden" href="/manual/object/<?= $data['objectsRent'][$i]{'id'} ?>"><!--element-shadow-->
                        <div class="img-wrapp-z-index">
                        </div>
                        <img src="<?= $data['objectsSale'][$i]{'img'} ?>" >
                        <div class="position ">
                            <h1><?= $data['objectsRent'][$i]{'city'}?> &nbsp; <?=$data['objectsRent'][$i]['street']?> &nbsp; <?=$data['objectsRent'][$i]{'house_number'} ?> </h1>
                            <p>
                                Стоимость:<?= $data['objectsRent'][$i]['price']?>
                            </p>
                            <p>
                                Количество комнат:<?= $data['objectsRent'][$i]['rooms']?>
                            </p>
                            <p>
                                Общая площадь:<?= $data['objectsRent'][$i]['square_meter']?>
                            </p>
                        </div>
                    </a>
                    </div>

                </div>
            <?php endfor; ?>
        </div>