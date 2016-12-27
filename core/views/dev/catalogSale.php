<?php
   for ($i = 0; $i < count($data['allObjectsSale']); $i++):
?>



            <section class="section disp">
                <div class="disp el-background">
                    <a class="element-shadow" href="../../../index.php">
                        <img src="/assets/img/header2.png" >
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


