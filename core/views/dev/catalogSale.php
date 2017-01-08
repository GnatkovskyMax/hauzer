<section>
    <h1 class="offers">Наши предложения продажи</h1>
    <div class="disp wrap-catalog">
<?php
   for ($i = 0; $i < count($data['allObjectsSale']); $i++):
//       echo '<pre>';
//          var_dump($data['allObjectsSale']);
//          echo '</pre>';
?>
            <section class="section disp">
                <div class="disp el-background">
                    <a class="element-shadow" href="/manual/object/<?= $data['allObjectsSale'][$i]{'id'}?>">
                        <img src="/assets/img/<?= $data['allObjectsSale'][$i]{'img'}?>.jpg" >
                        <div class="position">
                            <h1><?= $data['allObjectsSale'][$i]{'city'}?> &nbsp; <?=$data['allObjectsSale'][$i]['street']?> &nbsp; <?=$data['allObjectsSale'][$i]{'house_number'} ?> </h1>
                            <table>
                                <tr>
                                    <td>Стоимость:</td>
                                     <td><?= $data['allObjectsSale'][$i]['price']?> </td>
                                </tr>
                                <tr>
                                    <td>Количество комнат:</td>
                                    <td><?= $data['allObjectsSale'][$i]['rooms']?></td>
                                </tr>
                                <tr>
                                    <td>Общая площадь:</td>
                                    <td><?= $data['allObjectsSale'][$i]['square_meter']?></td>
                                </tr>
                            </table>
                        </div>
                    </a>
                </div>
            </section>


<?php endfor; ?>

    </div>
</section>
