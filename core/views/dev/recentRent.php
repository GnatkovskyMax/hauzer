<section class="section">
   <div class="container">
     <div class="col-md-7">
    <?php
    for ($i = 0; $i < count($data['recentRent']); $i++):
        ?>



        <div class="img-wrapp col-md-4">
            <a class="" href="/manual/object/<?= $data['recentRent'][$i]{'id'} ?>"><!--element-shadow-->
                <img class="img-responsive" src="/assets/img/<?=$data['recentRent'][$i]{'img'}?>.jpg" >
                <div class="position ">
                    <h1><?= $data['recentRent'][$i]{'city'}?> &nbsp; <?=$data['recentRent'][$i]['street']?> &nbsp; <?=$data['recentRent'][$i]{'house_number'} ?> </h1>
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
    <?php endfor;
     ?>
     </div>

       </div>
    </section>




