<?php
for ($i = 0; $i < count($data['objectsRent']); $i++):
    ?>


    <section class="section disp">
        <div class="disp el-background">
            <a class="element-shadow" href="/manual/object/<?= $data['objectsRent'][$i]{'id'} ?>">
                <img src="../../../assets/img/header2.png" >
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
    </section>


<?php endfor; ?>

<?php

