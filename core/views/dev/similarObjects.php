<?php
//function similarView($objects){
//    $cityOb = $data[0]['city'];
//    //var_dump($cityOb);
//    $roomOb = $data[0]['rooms'];
//    $priceOb = $data[0]['price'];
//    // var_dump($cityOb);
//            similarObjects($cityOb, $roomOb, $priceOb);
//            //var_dump(['objects' => $arr]);
// }
for ($i = 0; $i < count($data['similars']); $i++):
    ?>
    <section class="section-similar disp">
        <div class="disp el-background">
            <a class="element-shadow" href="/manual/object/<?= $data['similars'][$i]{'id'} ?>">
                <img src="/assets/img/3.jpg">
                <div class="position">
                    <h1 class="section-similar-h1"><?= $data['similars'][$i]{'city'}?> &nbsp; <?=$data['similars'][$i]['street']?> </h1>
                    <table>
                        <tr>
                            <td>Стоимость:</td>
                            <td><?= $data['similars'][$i]['price']?> </td>
                        </tr>
                        <tr>
                            <td>Количество комнат:</td>
                            <td><?= $data['similars'][$i]['rooms']?></td>
                        </tr>
                        <tr>
                            <td>Общая площадь:</td>
                            <td><?= $data['similars'][$i]['total_area']?></td>
                        </tr>
                    </table>
                </div>
            </a>
        </div>
    </section>

<?php endfor; ?>