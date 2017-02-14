<section class="section scroll-rent">
   <div class="container">
     <div class="col-md-7">
    <?php
    for ($i = 0; $i < count($data['objectsRent']); $i++):
        ?>



        <div class="img-wrapp col-md-4">
            <a class="" href="/manual/object/<?= $data['objectsRent'][$i]{'id'} ?>"><!--element-shadow-->
                <div class="img-wrapp-z-index">
                </div>
                <img class="img-responsive" src="/assets/img/header2.jpg" >
                <div class="position ">
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
    <?php endfor;
     ?>
     </div>

       </div>
    </section>




