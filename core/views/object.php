<section class="container">
<div class="row"><div class="col-md-6 catalog-img-wrap"><!--  o -->
        <div class="catalog-img slider-nav">
            <div onClick='opendialog()'><img src="<?=$data['objects'][0]['img-top'] ?>"></div>
            <?php
            $imegs = explode(',', $data['objects'][0]['img']);
            for ($i = 0; $i < count($imegs); $i++):
                ?>
                <div onClick='opendialog()'><img src="<?=$imegs[$i]?>"></div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="col-md-6 catalog-info-wrap ">
        <div class="helper-panel">

            <div class="helper-btn call"></div>
            <div class="helper-btn up-scroll"></div>
        </div>

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
        <!--		t	--></div>
    <section class="catalog-wrap col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!--		t	-->


			<p class="catalog-info col-xs-12 col-md-12 col-lg-12"><?=$data['objects'][0]['descriptione']?></p>
			 <?php
             require 'dev/similarObjects.php';
             ?>
    </section>
<!--	b2		--><div class='second-block col-md-12'>
		  <section class="map hidden-xs col-md-8">
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
        <div class="info-agent col-md-4">
            <h2>Информация об агенете</h2>
            <img class="disp" src="<?=$data['objects'][0]['img'] ?>">
            <div class="info disp">
                <h3>Вини Мишка Медведев</h3>
                <p>тел: 000-000-00-00</p>
                <p>mail: mail@mail.ru</p>
                <p>Агент по недвижемости ООО"HOUZER"</p>
            </div>
            <P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</P>
        </div>
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
                            $imegs = explode(',', $data['objects'][0]['img_object']);
                            for ($i = 0; $i < count($imegs); $i++):
                            ?>
							<div><img src="/assets/img/<?=$imegs[$i]?>.jpg"></div>
                            <?php endfor; ?>
						</div>
					</div>
				</div>
</main>
<?//= $data['objects'][$i]['square_meter']?><!--, --><?//= $data['objects'][$i]['price']?><!--,-->
<?//= $data['objects'][$i]['rooms']?><!--, --><?//=$data['objects'][$i]['city']?><!--, --><?//=$data['objectsSale'][$i]['street']?><!--,-->
<?//=$data['objects'][$i]{'house_number'}?>
<!--</p>-->
