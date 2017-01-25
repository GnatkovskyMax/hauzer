<?php
require_once 'dev/filter.php';
?>
<!-- <div class="arrow-wrap"><div class="prev"></div></div>
<div class="arrow right"></div> -->
<section class="wrap-slider">
<!--    <div class="slider-block">-->

        <?php
        require 'dev/catalogTop.php';
        ?>

<!--    </div>-->
</section>
<!--<div class="prev"></div>


</div>-->
<main>
    <section>
        <?php

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


//            foreach ($data['objectsFilter'] as $value) {
//                echo '<pre>';
//                var_dump($value);
//                echo '</pre>';
                //for ($i = 0; $i < count($data['objectsFilter']); $i++) {

                //var_dump($value['service']);
//                    if ($data['objectsFilter'][$i]['service'] == 'Аренда'){
//                        $data['ArrObjectFilterRent'][$i] = $data['objectsFilter'][$i];
////                        var_dump($data['ArrObjectFilterRent'][$i]);
//                    }elseif($data['objectsFilter'][$i]['service'] == 'Продажа'){
//                        $data['ArrObjectFilterSale'][$i] = $data['objectsFilter'][$i];
//                    }
//                };
            $i = 0;
            $a = 0;
        foreach ($data['objectsFilter'] as $value) {
            if ($value['service'] == 'Аренда'){
                $data['ArrObjectFilterRent'][$i] = $value;
                $i=$i+1;
//                        var_dump($data['ArrObjectFilterRent'][$i]);
            }elseif($value['service'] == 'Продажа'){
                $data['ArrObjectFilterSale'][$a] = $value;
                $a=$a+1;
            }
        };
//            echo '<pre>';
//               var_dump($ArrObjectFilterRent);
//                echo '</pre>';
                if ($data['ArrObjectFilterRent'] !== NULL){
                    //$data['ArrObjectFilterRent'] = $ArrObjectFilterRent;
                    require $catalogRent;
                }
                if ($data['ArrObjectFilterSale'] !== NULL){
                    //$data['ArrObjectFilterSale'] = $ArrObjectFilterSale;
                    require $catalogSale;
                }
//                if(in_array('Продажа', $value)){
//                    $i = 0;
//                    $ArrObjectFilterSale = array();
//                    $ArrObjectFilterSale[$i] = $value;
//                    $i ++;
//                }
//                echo '<pre>';
//               var_dump($value['service']);
//               echo '</pre>';
//                function rent($value)
//                {
//                    return ($value == 'Аренда');
//                }
//
//                function sale($value)
//                {
//                    return ($value == 'Продажа');
//                }

//                $ArrObjectFilterRent = array_filter($value, function ($value) {
//                    return ($value == 'Аренда');
//                });
//                $ArrObjectFilterSale = array_filter($value, function ($value) {
//                    return ($value == 'Продажа');
//                });

//            for ($i = 0; $i < count($data['objectsFilter']); $i++) {
//            foreach ($data['objectsFilter'] as $value){
////                echo '<pre>';
////                var_dump($i);
////                //var_dump(count($data['objectsFilter'][$i]));
////                var_dump($data['objectsFilter'][$i]);
////                echo '</pre>';
//                if (in_array('Аренда', $value)) {
////                    var_dump($data);
//                    require $catalogRent;
//                }
//                if (in_array('Продажа', $value)) {
//                    require $catalogSale;
//                }
//            }
                    // }


                }
//        elseif ($data['objectsFilter'] !== NULL){
                else{
            require $catalogRent;
            require $catalogSale;
        }
//        if ($data['objectsFilter'] !== NULL) {
//            for ($i = 0; $i < count($data['objectsFilter']); $i++) {
//                if ($data['objectsFilter'][$i]['service'] == 'аренда') {
//                    require $catalogRent;
//                }
//                if ($data['objectsFilter'][$i]['service'] == 'продажа') {
//                    require $catalogSale;
//                }
//            }
//        }
        ?>
    </section>
    <section class="personal">
        <h1>Наши сотрудники</h1>
        <div>
            <section class="info-agents element-shadow disp">
                <h3>Вини Мишка Медведев</h3>
                <img src="/assets/img/img_agents/2.png">
                <div class="info">
                    <p>тел: 000-000-00-00</p>
                    <p>mail: mail@mail.ru</p>
                    <p>Агент по недвижемости ООО"HOUZER"</p>
                </div>
                <P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
            </section>
            <section class="info-agents element-shadow disp">
                <h3>Вини Мишка Медведев</h3>
                <img src="/assets/img/img_agents/2.png">
                <div class="info">
                    <p>тел: 000-000-00-00</p>
                    <p>mail: mail@mail.ru</p>
                    <p>Агент по недвижемости ООО"HOUZER"</p>
                </div>
                <P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
            </section>
            <section class="info-agents element-shadow disp">
                <h3>Вини Мишка Медведев</h3>
                <img src="/assets/img/img_agents/2.png">
                <div class="info">
                    <p>тел: 000-000-00-00</p>
                    <p>mail: mail@mail.ru</p>
                    <p>Агент по недвижемости ООО"HOUZER"</p>
                </div>
                <P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
            </section>
            <section class="info-agents element-shadow disp">
                <h3>Вини Мишка Медведев</h3>
                <img src="/assets/img/img_agents/2.png">
                <div class="info">
                    <p>тел: 000-000-00-00</p>
                    <p>mail: mail@mail.ru</p>
                    <p>Агент по недвижемости ООО"HOUZER"</p>
                </div>
                <P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
            </section>
        </div>
    </section>
</main>
