<?php
   for ($i = 0; $i < count($data['objects']); $i++):
?>



            <section class="section disp">
                <div class="disp el-background">
                    <a class="element-shadow" href="/manual/object/<?= $data['objects'][$i]{'id'} ?>">
                        <img src="/assets/img/header2.jpg" >
                        <div class="position">
                            <h1><?= $data['objects'][$i]{'city'}?> &nbsp; <?=$data['objects'][$i]['street']?> &nbsp; <?=$data['objects'][$i]{'house_number'} ?> </h1>
                            <table>
                                <tr>
                                    <td>Стоимость:</td>
                                     <td><?= $data['objects'][$i]['price']?> </td>
                                </tr>
                                <tr>
                                    <td>Количество комнат:</td>
                                    <td><?= $data['objects'][$i]['rooms']?></td>
                                </tr>
                                <tr>
                                    <td>Общая площадь:</td>
                                    <td><?= $data['objects'][$i]['square_meter']?></td>
                                </tr>
                            </table>
                        </div>
                    </a>
                </div>
            </section>


<?php endfor; ?>


