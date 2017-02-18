
    <div class=" bootstrap-padding-none wrapp-parent col-xs-12 col-sm-12 col-md-5 col-lg-5 recent">
    <?php
    for ($i = 0; $i < count($data['objectsRent']); $i++):
        ?>
        <div class="img-wrapp col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="wrapp-body">
            <a class="" href="/manual/object/<?= $data['objectsRent'][$i]{'id'} ?>"><!--element-shadow-->
                <img  src="/assets/img/header2.jpg" >
                <div class="position-recent">
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
    <?php endfor;
     ?>
     </div>





