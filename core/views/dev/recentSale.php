<section class="section">
   <div class="container">
     <div class="col-md-7">
    <?php
    for ($i = 0; $i < count($data['recentSale']); $i++):
        ?>



        <div class="img-wrapp col-md-4">
            <a class="" href="/manual/object/<?= $data['recentSale'][$i]{'id'} ?>"><!--element-shadow-->
                <img class="img-responsive" src="/assets/img/<?=$data['recentSale'][$i]{'img'}?>.jpg" >
                <div class="position ">
                    <h1><?= $data['recentSale'][$i]{'city'}?> &nbsp; <?=$data['recentSale'][$i]['street']?> &nbsp; <?=$data['recentSale'][$i]{'house_number'} ?> </h1>
                    <p>
                        Стоимость:<?= $data['recentSale'][$i]['price']?>
                    </p>
                    <p>
                        Количество комнат:<?= $data['recentSale'][$i]['rooms']?>
                    </p>
                    <p>
                        Общая площадь:<?= $data['recentSale'][$i]['square_meter']?>
                    </p>
                </div>
            </a>
        </div>
    <?php endfor;
     ?>
     </div>

       </div>
    </section>




