<main class="container">
<div class="row">
		<section class="catalog-wrap col-xs-12 col-md-12 col-lg-12">
			<div class="col-md-6 catalog-info-wrap ">
                <div class="helper-panel">

                    <div class="helper-btn call"></div>
                    <div class="helper-btn up-scroll"></div>
                </div>
            </div> -->

                <?php
                if (empty($data['objects'])){
                    $message = 'Обьект по указаному ID не найдено!';
                }
                ?>
                <p><?=$message?></p>
<!--				<table>-->
<!--					<caption class="catalog-wrap-head"><h1>--><?//=$data['objects'][0]['city'] ?><!-- --><?//=$data['objects'][0]['district'] ?><!-- район</h1>-->
<!--					<h2>--><?//=$data['objects'][0]['price'] ?><!-- грн.</h2></caption>-->
<!--                    <tr class="tr-back">-->
<!--                        <td>Номер объекта:</td>-->
<!--                        <td>--><?//=$data['objects'][0]['id']?><!--</td>-->
<!--                    </tr>-->
<!--					<tr>-->

				<table class="col-md-12">
					<caption class="catalog-wrap-head ">
					<h1 class="col-md-8"><?=$data['objects'][0]['city'] ?> <?=$data['objects'][0]['district'] ?> район</h1>
					<h2 class="caption-price col-md-4"><?=$data['objects'][0]['price'] ?> грн</h2>
					</caption>
                    <tr class="tr-back">
                        <td>Номер объекта:</td>
                        <td><?=$data['objects'][0]['id']?></td>
                    </tr>

                    <tr>
						<td>Адресс:</td>
						<td>г.<?=$data['objects'][0]['city'] ?> ул. <?=$data['objects'][0]['street'] ?> <?=$data['objects'][0]['house_number'] ?> кв <?=$data['objects'][0]['apartament_number'] ?></td>
					</tr>
					<tr class="tr-back">
						<td>Стоимость за 1кв.м:</td>
						<td><?=$data['objects'][0]['square_meter'] ?> грн.</td>
					</tr>
					<tr>
						<td>Количество комнат:</td>
						<td><?=$data['objects'][0]['rooms'] ?>  <?if($data['objects'][0]['rooms'] == 1){
                        echo "комната";}
                        elseif($data['objects'][0]['rooms'] <5){
                        echo "комнаты";
                        }else{
                                echo "комнат";
                            }
						?></td>
					</tr>
					<tr class="tr-back">
						<td>Общая площадь:</td>
						<td><?=$data['objects'][0]['total_area'] ?> кв.м</td>
					</tr>
					<tr>
						<td>Жилая площадь:</td>
						<td><?=$data['objects'][0]['area'] ?> кв.м</td>
					</tr>
<!--					<tr class="tr-back">-->
<!--						<td>Примечание:</td>-->
<!--						<td>--><?//=$data['objects'][0]['basic_description'] ?><!--</td>-->
<!--					</tr>-->
				</table>
			</div>
			<div class="col-md-6 catalog-img-wrap"><!--   -->
				<div class="catalog-img slider-nav">
					<div onClick='opendialog()'><img src="/assets/img/<?=$data['objects'][0]['img'] ?>.jpg"></div>
                    <?php
                    $imegs = explode(',', $data['objects'][0]['img_object']);
                    for ($i = 0; $i < count($imegs); $i++):
                    ?>
                        <div onClick='opendialog()'><img src="/assets/img/<?=$imegs[$i]?>.jpg"></div>
                     <?php endfor; ?>
				</div>
			</div>

			<p class="catalog-info"><?=$data['objects'][0]['descriptione']?></p>
            <section class="info-nas">
                <h1>Почему выберают нас?</h1>
                <div class="info-nas-vib disp">
                    <img src="/assets/img/images_content/cnlogo1.png">
                    <p>Вы отправляете нам заявку, мы свяжемся с Вами в ближайшее время и уточняем критерии поиска</p>
                </div>
                <div class="info-nas-vib disp">
                    <img src="/assets/img/images_content/cnlogo2.png">
                    <p>Быстро и качественно подбираем Вам квартиру согласна Вашим требованиям и пожеланиям</p>
                </div>
                <div class="info-nas-vib disp">
                    <img src="/assets/img/images_content/cnlogo4.png">
                    <p>Если Вас всё устраивает, мы берём на себя процедуру оформления документов аренды</p>
                </div>
            </section>
            <section class="reg">
                <h1>Почему выбирают нас?</h1>
                <p>Узнайте о всех специальных предложениях и акциях нашей компании</p>
                <form class="reg-form" action="" method="post" id="contact">
                    <input type="text" name="name" placeholder="Ваше имя"><span></span>
                    <input type="tel" name="tel" placeholder="Ваш телефон"><span></span>
                    <input type="email" name="email" placeholder="Ваш E-mail"><span></span>
                    <input class="butt" id="submit" type="submit" name="submit" value="Отправить"><span></span>
                </form>
            </section>
 <div class="info-agent">


<!--			<p class="catalog-info col-xs-12 col-md-12 col-lg-12">--><?//=$data['objects'][0]['descriptione']?><!--</p>-->
			 <?php
             require 'dev/similarObjects.php';
             ?>
			
			<div class='second-block col-md-12'>
		  <section class="map hidden-xs col-md-8">
        <?php
        require_once 'dev/maps.php';
        ?>

    </section>
    	<div class="info-agent col-md-4">
		<h2>Информация об агенете</h2>
            <?php
            require 'dev/agents.php';
            ?>
<!--		<img class="disp" src="/assets/img/img_agents/2.png">-->
<!--		<div class="info disp">-->
<!--			<h3>Вини Мишка Медведев</h3>-->
<!--			<p>тел: 000-000-00-00</p>-->
<!--			<p>mail: mail@mail.ru</p>-->
<!--			<p>Агент по недвижемости ООО"HOUZER"</p>-->
<!--		</div>-->
<!--		<P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</P>-->
	</div>
	        </div>
		
	
			</div>


			
		<div id="map_canvas"></div>
		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325518.68788216694!2d30.252507167568886!3d50.40169903727238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LI!5e0!3m2!1sru!2sua!4v1479848168391" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
	</section>
    <?php
    require 'dev/similarObjects.php';
    ?>
	<!-- <section class="info-nas">vremenno!!!!!!!!!!!!!
		<h1>Почему выберают нас?</h1>
		<div class="info-nas-vib disp">
			<img src="/assets/img/images_content/cnlogo1.png">
			<p>Вы отправляете нам заявку, мы свяжемся с Вами в ближайшее время и уточняем критерии поиска</p>
		</div>
		<div class="info-nas-vib disp">
			<img src="/assets/img/images_content/cnlogo2.png">
			<p>Быстро и качественно подбираем Вам квартиру согласна Вашим требованиям и пожеланиям</p>
		</div>
		<div class="info-nas-vib disp">
			<img src="/assets/img/images_content/cnlogo4.png">
			<p>Если Вас всё устраивает, мы берём на себя процедуру оформления документов аренды</p>
		</div>
	</section> -->
	<!-- <section class="reg">vremnno!!!!!!!!!!!!
		<h1>Почему выбирают нас?</h1>
		<p>Узнайте о всех специальных предложениях и акциях нашей компании</p>
		<form class="reg-form">
			<input type="text" name="name" placeholder="Ваше имя	"></input>
			<input type="tel" name="tel" placeholder="Ваш телефон"></input>
			<input type="email" name="email" placeholder="Ваш E-mail"></input>
			<button class="butt">Отправить</button>
		</form>
	</section> -->
    </div>
	</main>

<?php

?>


