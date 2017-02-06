
<section class="section">
    <div class="container">
        <div class="col-md-7">
            <?php
            for ($i = 0; $i < count($data['objectsSale']); $i++):
                ?>



                <div class="img-wrapp col-md-4">
                    <a class="" href="/manual/object/<?= $data['objectsSale'][$i]{'id'} ?>"><!--element-shadow-->
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
            <?php endfor; ?>
        </div>
    </div>
</section>