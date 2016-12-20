
<?php
require_once 'dev/filter.php';
;?>
<main>
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
    </section>
    <section>
        <h1 class="offer">Объекты на карте</h1>
        <?php
        require_once 'dev/maps.php'
        ;?>

    </section>
</main>

<!--//-->
<!--//function inve($x) {-->
<!--//    if ($x<100) {-->
<!--//        throw new Exception('menshe chem100.');-->
<!--//    }-->
<!--//    return $x;-->
<!--//}-->
<!--//function inverse($x) {-->
<!--//    if (!$x) {-->
<!--//        throw new Exception('Деление на ноль.');-->
<!--//    }-->
<!--//    return 1/$x;-->
<!--//}-->
<!--//-->
<!--//try {-->
<!--//    echo inverse(1) . "\n";-->
<!--//} catch (Exception $e) {-->
<!--//    echo 'Поймано исключение: ',  $e->getMessage(), "\n";-->
<!--//} finally {-->
<!--//    echo "Первое finally.\n";-->
<!--//}-->
<!--//-->
<!--//try {-->
<!--//    echo inve(45) . "\n";-->
<!--//} catch (Exception $e) {-->
<!--//    echo 'Поймано исключение: ',  $e->getMessage(), "\n";-->
<!--//} finally {-->
<!--//    echo "Второе finally.\n";-->
<!--//}-->
<!--//-->
<!--//// Продолжение нормального выполнения-->
<!--//echo "Hello World\n";-->

<?php

class MyException extends Exception { }

class Test {
    public function testing($r) {
            try {
                try {
                    throw new MyException('foo!');
                } catch (MyException $e) {
                    // повторный выброс исключения
                    throw $e;
                }
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }

    }

}
$re=-1;
$foo = new Test;
$foo->testing($re);

?>
