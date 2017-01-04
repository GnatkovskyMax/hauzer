<?php
require_once 'dev/filter.php';
?>
<!-- <div class="arrow-wrap"><div class="prev"></div></div>
<div class="arrow right"></div> -->
<section class="wrap-slider">
    <div class="slider-block">

        <?php
        require 'dev/catalogTop.php';

        ?>

    </div>
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
        }else{
            require $catalogRent;
            require $catalogSale;
        }
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
