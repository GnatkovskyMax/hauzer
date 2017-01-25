
<section>
    <h1 class="">Похожие</h1>
    <div class="disp wrap-catalog rent">
<section class="section">
    <div class="container">
        <div class="col-md-12">
        <?php
        for ($i = 0; $i < count($data['similars']); $i++):
    ?>
                <div class="img-wrapp col-md-3">
                     <a class="element-shadow" href="/manual/object/<?= $data['similars'][$i]{'id'} ?>">
                        <img src="/assets/img/<?=$data['similars'][$i]{'img'}?>.jpg" >
                        <div class="position show">
                            <h1><?= $data['similars'][$i]{'city'}?> &nbsp; <?=$data['similars'][$i]['street']?> &nbsp; <?=$data['similars'][$i]{'house_number'} ?> </h1>
                            <p>
                                <?= $data['similars'][$i]['service']?>
                            </p>
                            <p>
                                Стоимость:<?= $data['similars'][$i]['price']?>
                            </p>
                            <p>
                                Количество комнат:<?= $data['similars'][$i]['rooms']?>
                            </p>
                            <p>
                                Общая площадь:<?= $data['similars'][$i]['square_meter']?>
                            </p>

                        </div>
                    </a>
                </div>
            <?php endfor;?>
        </div>
       <!--  <div class="col-md-12 forBtn">
        <?php
        $btn= count($data['btnRent']) ;
        for ($i = 1; $i <= $btn; $i++):
        ?>
        <button class="load" onmousemove="load()"><?=$i?></button>
        <?php endfor;

        ?>
        </div> -->
    </div>
</section>
    </div>
</section>

