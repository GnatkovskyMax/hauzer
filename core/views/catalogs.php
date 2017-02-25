<?php
require_once 'dev/filter.php';
?>

<section class="wrap-slider">

<!-- <div class="arrow-wrap"><div class="prev"></div></div>
<div class="arrow right"></div> -->
<section class="wrap-slider hidden-xs">
<!--    <div class="slider-block">-->

        <?php
        require_once 'dev/catalogTop.php';
        ?>

</section>
<main>
    <section>
        <?php
        //        echo '<pre>';
        //                          var_dump(getUrlSegment);
        //                         echo '</pre>';
                $catalogSale = 'dev/catalogSale.php';
                $catalogRent = 'dev/catalogRent.php';
                if (getUrlSegment(2) !== NULL){
                    if(getUrlSegment(2) == 'rent'){
                        require $catalogRent;
                    }
                    elseif (getUrlSegment(2) == 'sale'){
                        require $catalogSale;
                    }
                }elseif ($data['objectsFilter'] !== NULL){
                    $i = 0;
                    $a = 0;
                    if (empty($data['objectsFilter'])){
                        $message = 'Обьект по указаным критериям поиска не найдено!';
                    }else{
                        foreach ($data['objectsFilter'] as $value) {
                            if ($value['service'] == 'Аренда'){
                                $data['ArrObjectFilterRent'][$i] = $value;
                                $i=$i+1;
                            }elseif($value['service'] == 'Продажа'){
                                $data['ArrObjectFilterSale'][$a] = $value;
                                $a=$a+1;
                            }
                        };
                        if ($data['ArrObjectFilterRent'] !== NULL){
                            require $catalogRent;
                        }
                        if ($data['ArrObjectFilterSale'] !== NULL){
                            require $catalogSale;
                        }
                    }

                }
//                elseif (empty($data['objectsFilter'])){
//                    $message = 'Обьект по указаным критериям поиска не найдено!';
//                }
                else{

                    require $catalogRent;
                    require $catalogSale;
                }
        //var_dump($message);
        ?>
        <p><?=$message?></p>


<!--            require $catalogRent;-->
<!--            require $catalogSale;-->
<!--        }-->
<!--        $rent=true;///test-->
<!--        $sale=true;//test-->
<!--        require 'dev/helper-panel.php'//test-->
<!--//        if ($data['objectsFilter'] !== NULL) {-->
<!--//            for ($i = 0; $i < count($data['objectsFilter']); $i++) {-->
<!--//                if ($data['objectsFilter'][$i]['service'] == 'аренда') {-->
<!--//                    require $catalogRent;-->
<!--//                }-->
<!--//                if ($data['objectsFilter'][$i]['service'] == 'продажа') {-->
<!--//                    require $catalogSale;-->
<!--//                }-->
<!--//            }-->
<!--//        }-->
<!--        ?>-->

    </section>
<!--    <section class="personal container">-->
<!--        <div class="row">-->
<!--            <h1>Наши сотрудники</h1>-->
<!--            <div>-->
<!--                <section class="info-agents element-shadow  col-xs-12">-->
<!--                    <h3>Вини Мишка Медведев</h3>-->
<!--                    <img src="/assets/img/img_agents/2.png">-->
<!--                    <div class="info">-->
<!--                        <p>тел: 000-000-00-00</p>-->
<!--                        <p>mail: mail@mail.ru</p>-->
<!--                        <p>Агент по недвижемости ООО"HOUZER"</p>-->
<!--                    </div>-->
<!--                    <P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>-->
<!--            </div>-->
<!--                </section>-->
<!--        </div>-->
<!--    </section>-->
</main>
