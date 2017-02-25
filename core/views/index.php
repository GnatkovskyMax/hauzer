<?php
require_once 'dev/filter.php';
?>
<main>
    <section class="map hidden-xs">
        <!--            <h1 class="offer">Объекты на карте</h1>-->
        <?php
        require_once 'dev/maps.php';
        ?>
    </section>
    <section>
        <section class="descriptionHauzez">
            <h1>Агенство недвижимости HAUZEZ</h1>
            <p>Агенство недвижимости HAUZEZ предоставляет полный спектр риелторских услуг. Мы уделяем внимание каждому клиенту, к его требованием и пожеланиям.
            </p>
            <p>Наш девиз: «Профессионализм – залог успеха». Именно он определяет долгосрочную стратегию развития нашей компании, основанную на предоставлении профессиональных и качественных услуг, индивидуального подхода к требованиям каждого клиента.</p>
        </section>

        <section>
            <h1 class="offer">Наши TOP предложения аренды</h1>
            <div class="disp wrap-catalog">
                <?php
                include 'dev/topRent.php'
                ;?>
            </div>

        </section>
        <section>
            <h1 class="offer">Наши TOP предложения продажи</h1>
            <div class="disp wrap-catalog">
                <?php
                include 'dev/topSale.php'
                ;?>
            </div>
        </section>
        <section>
            <h1 class="offer">Последнее аренда</h1>
            <div class="disp wrap-catalog">
                <?php
                include 'dev/recentRent.php'
                ;?>
            </div>
        </section>
        <section>
            <h1 class="offer">Последнее продажа</h1>
            <div class="disp wrap-catalog">
                <?php
                include 'dev/recentSale.php'
                ;?>
            </div>
        </section>
    </section>
</main>