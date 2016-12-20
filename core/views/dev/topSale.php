<?php
for ($i = 0; $i < count($data['objectsSale']); $i++):
    ?>


    <section class="section disp">
        <div class="disp el-background">
            <a class="element-shadow" href="/manual/object/<?= $data['objectsRent'][$i]{'id'} ?>">
                <img src="../../../assets/img/header2.png" >
                <div class="position">
                    <h1><?= $data['objectsSale'][$i]{'city'}?> &nbsp; <?=$data['objectsSale'][$i]['street']?> &nbsp; <?=$data['objectsSale'][$i]{'house_number'} ?> </h1>
                    <table>
                        <tr>
                            <td>Стоимость:</td>
                            <td><?= $data['objectsSale'][$i]['price']?> </td>
                        </tr>
                        <tr>
                            <td>Количество комнат:</td>
                            <td><?= $data['objectsSale'][$i]['rooms']?></td>
                        </tr>
                        <tr>
                            <td>Общая площадь:</td>
                            <td><?= $data['objectsSale'][$i]['square_meter']?></td>
                        </tr>
                    </table>
                </div>
            </a>
        </div>
    </section>


<?php endfor; ?>
