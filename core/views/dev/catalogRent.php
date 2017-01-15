<section>
    <h1 class="offers">Наши предложения аренды</h1>
    <div class="disp wrap-catalog ">
<section class="section">
    <div class="container">
        <div class="col-md-12">
            <?php
            for ($i = 0; $i < count($data['objects']); $i++):
//                var_dump($data);
                ?>
                <div class="img-wrapp col-md-3">
                    <a class="" href="/manual/object/<?= $data['objects'][$i]{'id'} ?>"><!--element-shadow-->
                        <img src="/assets/img/<?=$data['objects'][$i]{'img'}?>.jpg" >
                        <div class="position show">
                            <h1><?= $data['objects'][$i]{'city'}?> &nbsp; <?=$data['objectsRent'][$i]['street']?> &nbsp; <?=$data['objectsRent'][$i]{'house_number'} ?> </h1>
                            <p>
                                <?= $data['objects'][$i]['service']?>
                            </p>
                            <p>
                                Стоимость:<?= $data['objects'][$i]['price']?>
                            </p>
                            <p>
                                Количество комнат:<?= $data['objects'][$i]['rooms']?>
                            </p>
                            <p>
                                Общая площадь:<?= $data['objects'][$i]['square_meter']?>
                            </p>

                        </div>
                    </a>
                </div>
            <?php endfor;?>
        </div>
        <?php
     echo    $_GET['m'];
     $btn= count($data['btnRent'])/2-1 ;
        for ($i = 1; $i <= $btn; $i++):
        ?>
        <button class="load"><?=$i+1?></button>
        <?php endfor;?>
    </div>
</section>
    </div>
</section>

