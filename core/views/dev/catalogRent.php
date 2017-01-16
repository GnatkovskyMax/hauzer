<section>
    <h1 class="offers">Наши предложения аренды</h1>
    <div class="disp wrap-catalog rent">
<section class="section">
    <div class="container">
        <div class="col-md-12">
            <?php
            //var_dump('ArrObjectFilterRent');
            if($data['ArrObjectFilterRent'] !== NULL){
                $data['objects'] = $data['ArrObjectFilterRent'];
            }else{
                $data['objects'] = $data['objects'];
            }
            for ($i = 0; $i < count($data['objects']); $i++):
//                var_dump($data);
                ?>
                <div class="img-wrapp col-md-3">
                    <a class="" href="/manual/object/<?= $data['objects'][$i]{'id'} ?>"><!--element-shadow-->
                        <img src="/assets/img/<?=$data['objects'][$i]{'img'}?>.jpg" >
                        <div class="position show">
                            <h1><?= $data['objects'][$i]{'city'}?> &nbsp; <?=$data['objects'][$i]['street']?> &nbsp; <?=$data['objects'][$i]{'house_number'} ?> </h1>
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
        <div class="col-md-12 forBtn">
        <?php
        $btn= count($data['btnRent']) ;
        for ($i = 1; $i <= $btn; $i++):
        ?>
        <button class="load" onmousemove="load()"><?=$i?></button>
        <?php endfor;

        ?>
        </div>
    </div>
</section>
    </div>
</section>

