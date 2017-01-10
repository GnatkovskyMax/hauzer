<section>
    <h1 class="offers">Наши предложения аренды</h1>
    <div class="disp wrap-catalog ">
        <section class="section">
            <div class="container">
                <div class="col-md-12">
                    <?php
                    for ($i = 0; $i < count($data['allObjectsSale']); $i++):
                        ?>
                        <div class="img-wrapp col-md-3">
                            <a class="" href="/manual/object/<?= $data['allObjectsSale'][$i]{'id'} ?>"><!--element-shadow-->
                                <img src="/assets/img/<?=$data['allObjectsSale'][$i]{'img'}?>.jpg" >
                                <div class="position show">
                                    <h1><?= $data['allObjectsSale'][$i]{'city'}?> &nbsp; <?=$data['allObjectsSale'][$i]['street']?> &nbsp; <?=$data['allObjectsSale'][$i]{'house_number'} ?> </h1>
                                    <p>
                                        Стоимость:<?= $data['allObjectsSale'][$i]['price']?>
                                    </p>
                                    <p>
                                        Количество комнат:<?= $data['allObjectsSale'][$i]['rooms']?>
                                    </p>
                                    <p>
                                        Общая площадь:<?= $data['allObjectsSale'][$i]['square_meter']?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
    </div>
</section>