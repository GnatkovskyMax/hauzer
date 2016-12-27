
<section class="section col-md-7">
<?php
for ($i = 0; $i < count($data['objectsRent']); $i++):
    ?>



        <div class="img-wrapp col-md-4">
            <a class="" href="/manual/object/<?= $data['objectsRent'][$i]{'id'} ?>"><!--element-shadow-->
                <img src="/assets/img/header2.jpg" >
                <div class="position">
                    <h1><?= $data['objectsRent'][$i]{'city'}?> &nbsp; <?=$data['objectsRent'][$i]['street']?> &nbsp; <?=$data['objectsRent'][$i]{'house_number'} ?> </h1>
                    <table>
                        <tr>
                            <td>Стоимость:</td>
                            <td><?= $data['objectsRent'][$i]['price']?> </td>
                        </tr>
                        <tr>
                            <td>Количество комнат:</td>
                            <td><?= $data['objectsRent'][$i]['rooms']?></td>
                        </tr>
                        <tr>
                            <td>Общая площадь:</td>
                            <td><?= $data['objectsRent'][$i]['square_meter']?></td>
                        </tr>
                    </table>
                </div>
            </a>
        </div>
<?php endfor; ?>
    </section>




