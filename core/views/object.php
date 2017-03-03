<section class="container">
<div class="row">
    <section class="clearfix">
    <div class="col-md-6 catalog-img-wrap"><!--  o -->
        <div class="catalog-img for-img slider-nav">
<!--            <div onClick='opendialog()'><img src="--><?//=$data['objects'][0]['img-top'] ?><!--"></div>-->
            <?php
            $imegs = explode(',', $data['objects'][0]['img']);
            for ($i = 0; $i < count($imegs); $i++):
                ?>
                <div onClick='opendialog()'><img src="<?=$imegs[$i]?>"></div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="col-md-6 catalog-info-wrap ">
        <table class="col-md-12">

            <caption class="catalog-wrap-head ">
                <h1 class="col-md-8"><?=$data['objects'][0]['city'] ?> <?=$data['objects'][0]['district'] ?> район</h1>
                <h2 class="caption-price col-md-4"><?=$data['objects'][0]['price'] ?> грн</h2>
            </caption>
            <tr class="tr-back">
                <td>Адресс:</td>
                <td>г.<?=$data['objects'][0]['city'] ?> ул. <?=$data['objects'][0]['street'] ?> <?=$data['objects'][0]['house_number'] ?> кв <?=$data['objects'][0]['apartament_number'] ?></td>
            </tr>
            <tr>
                <td>Стоимость за 1кв.м:</td>
                <td><?=$data['objects'][0]['square_meter'] ?> грн.</td>
            </tr>
            <tr class="tr-back">
                <td>Количество комнат:</td>
                <td><?=$data['objects'][0]['rooms'] ?>  <?if($data['objects'][0]['rooms']<5){
                        echo "комнаты";}
                    else{
                        echo "комнат";
                    }
                    ?></td>
            </tr>
            <tr>
                <td>Общая площадь:</td>
                <td><?=$data['objects'][0]['total_area'] ?> кв.м</td>
            </tr>
            <tr class="tr-back">
                <td>Жилая площадь:</td>
                <td><?=$data['objects'][0]['area'] ?> кв.м</td>
            </tr>
            <tr>
                <td>Примечание:</td>
                <td><?=$data['objects'][0]['basic_description'] ?></td>
            </tr>
        </table>
      </div>
    </section>
    <section class="info-agent col-sm-3 col-md-3 col-lg-3 hidden-xs">
        <div class="row">
            <h2 class="head-description "><span>Информация об агенете</span></h2>
            <img class="" src="<?=$data['objects'][0]['img'] ?>">
            <div class="">
                <h3>Вини Мишка Медведев</h3>
                <p>тел: 000-000-00-00</p>
                <p>mail: mail@mail.ru</p>
                <p>Агент по недвижемости ООО"HOUZER"</p>
            </div>
<!--            <P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</P>-->

        </div>
            </section>
			<section id="catalog-info" class="col-xs-12 col-sm-6 col-md-5 col-lg-5 ">
                <p class="head-description"><span>Описание</span></p>
                <section class="descr">
                    <?=$data['objects'][0]['descriptione']?>
                </section>
            </section>
    <section class="map hidden-xs col-sm-3 col-md-4 col-lg-4">
        <div id="dbMyLatLng" style="display:none">
            <?php ?>

            <p>  <?= $data['objects'][0]['lat']?>, <?= $data['objects'][0]['lng']?>,<?= $data['objects'][0]['id']?> ,
                <?= $data['objects'][0]['img_general']?>, <?= $data['objects'][0]['service']?>,
                <?= $data['objects'][0]['price']?>, <?= $data['objects'][0]['rooms']?>, <?= $data['objects'][0]['square_meter']?>
            </p>

            <?php ?>
        </div>
        <?php
        require_once 'dev/maps.php';
        ?>
    </section>

			 <?php
             require 'dev/similarObjects.php';
             ?>
    <section class="info-agent col-xs-12 visible-xs">
        <div class="row">
            <h2 class="head-description "><span>Информация об агенете</span></h2>
            <img class="" src="<?=$data['objects'][0]['img'] ?>">
            <div class="">
                <h3>Вини Мишка Медведев</h3>
                <p>тел: 000-000-00-00</p>
                <p>mail: mail@mail.ru</p>
                <p>Агент по недвижемости ООО"HOUZER"</p>
            </div>
<!--            <P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</P>-->

        </div>   </section>
    <div class="helper-panel">
        <?php if($s==true){ ?>
            <div class="helper-btn similarObj"></div>
         <?php }?>
        <div class="helper-btn call"></div>
        <div class="helper-btn up-scroll"></div>
    </div>
    </div>
</section>
			<div class="back-dialog" id="dialog">
					<div class="dialog-content">
						<div class="dialog-title">
							<span><?=$data['objects'][0]['city'] ?> <?=$data['objects'][0]['district']?> район</span>
							<a class="close-dialog" href="javascript: closedialog()"></a>
						</div>
						<div class="catalog-img1">
                            <?php
                            $imegs = explode(',', $data['objects'][0]['img']);
                            for ($i = 0; $i < count($imegs); $i++):
                            ?>
							<div><img src="<?=$imegs[$i]?>"></div>
                            <?php endfor; ?>
						</div>
					</div>
				</div>

