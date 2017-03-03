<?php
if(count($data['similars'])>0){
    $s=true;
?>
<section class="section container">

    <div class="row">
        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 bootstrap-padding-none wrapp-parent">
            <h2 class="head-description similar-scroll"><span>Похожие</span></h2>
            <?php
            for ($i = 0; $i < count($data['similars']); $i++):
                ?>
                <div class="img-wrapp col-xs-6 col-sm-4 col-md-3 col-lg-3">
                    <div class="wrapp-body">
                        <a class="overflow-hidden" href="/manual/object/<?= $data['similars'][$i]{'id'} ?>"><!--element-shadow-->
                            <div class="img-wrapp-z-index">
                            </div><!--
                        --><img src="<?=$data['similars'][$i]{'img'}?>" ><!--
                        --><div class="position show">

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
                </div>
            <?php endfor;?>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12 forBtn">
            <?php
            $btn= count($data['btnRent']) ;
            for ($i = 1; $i <= $btn; $i++):
                ?>
                <button class="load" ><?=$i?></button>
            <?php endfor;

            ?>
        </div>
    </div>
</section>
    <?php
}
?>
