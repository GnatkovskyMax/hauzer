<?php

$rent=true;
$sale=true;
require 'dev/helper-panel.php';
require_once 'dev/filter.php'
?>
    <section class="map hidden-xs">
        <!--            <h1 class="offer">Объекты на карте</h1>-->
        <?php
        require_once 'dev/maps.php';
        ?>

    </section>

        <section class="descriptionHauzez">
            <h1>Агенство недвижимости HAUZEZ</h1>
            <p>Агенство недвижимости HAUZEZ предоставляет полный спектр риелторских услуг. Мы уделяем внимание каждому клиенту, к его требованием и пожеланиям.
            </p>
            <p>Наш девиз: «Профессионализм – залог успеха». Именно он определяет долгосрочную стратегию развития нашей компании, основанную на предоставлении профессиональных и качественных услуг, индивидуального подхода к требованиям каждого клиента.</p>
        </section>
<section class="top" >
    <h2 class="offer rent scroll-rent">Наши предложения аренды</h2>
    <div class="section container">
        <div class="row">

                <?php
                include 'dev/topRent.php'
                ;?>
                <?php
                include 'dev/recentRent.php'
                ;?>
        </div>
    </div>
    <h2 class="offer rent scroll-sale">Наши предложения продажи</h2>
    <div class="section container">
        <div class="row">

            <?php
            include 'dev/topSale.php'
            ;?>
            <?php
            include 'dev/recentSale.php'
            ;?>
        </div>
    </div>
</section>


<!--        <section class="scroll-sale">-->
<!--            <h2 class="offer">Наши предложения продажи</h2>-->
<!--            <div class="">-->
<!--                <h3 class="offer-children">Топ</h3>-->
<!--                --><?php
//                include 'dev/topSale.php'
//                ;?>
<!--            </div>-->
<!--            <div class="">-->
<!--                <h3 class="offer-children">Последние добавленые</h3>-->
<!--                --><?php
//                include 'dev/recentSale.php'
//                ;?>
<!--            </div>-->
<!--        </section>-->
<!--    </section>-->

</main>