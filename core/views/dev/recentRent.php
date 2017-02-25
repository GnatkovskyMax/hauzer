
    <div class=" bootstrap-padding-none wrapp-parent col-xs-12 col-sm-12 col-md-5 col-lg-5 recent">
    <?php
    for ($i = 0; $i < count($data['recentRent']); $i++):
        ?>
        <div class="img-wrapp col-md-4">
            <a class="" href="/manual/object/<?= $data['recentRent'][$i]{'id'} ?>">
                <img class="img-responsive" src="/assets/img/<?=$data['recentRent'][$i]{'img'}?>.jpg" >
                <div class="position ">
                    <h1><?= $data['recentRent'][$i]{'city'}?> &nbsp; <?=$data['recentRent'][$i]['street']?> &nbsp; <?=$data['recentRent'][$i]{'house_number'} ?> </h1>

        <div class="img-wrapp col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="wrapp-body">
            <a class="" href="/manual/object/<?= $data['objectsRent'][$i]{'id'} ?>">
                <img  src="/assets/img/header2.jpg" >
                <div class="position-recent">
                    <h1><?= $data['objectsRent'][$i]{'city'}?> &nbsp; <?=$data['objectsRent'][$i]['street']?> &nbsp; <?=$data['objectsRent'][$i]{'house_number'} ?> </h1>

                    <p>
                        Стоимость:<?= $data['recentRent'][$i]['price']?>
                    </p>
                    <p>
                        Количество комнат:<?= $data['recentRent'][$i]['rooms']?>
                    </p>
                    <p>
                        Общая площадь:<?= $data['recentRent'][$i]['square_meter']?>
                    </p>
                </div>
            </a>
            </div>
        </div>
    <?php endfor;
     ?>
     </div>





