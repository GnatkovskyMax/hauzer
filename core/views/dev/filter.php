
<div class="content  clearfix" id="filter">
        <div class="container">
<form method="get" action="/manual/catalogs">
    <div class="filter-line">

			<div class="col-xs-2 visible-xs adv-xs adv"></div>
        <div class="col-xs-10 col-sm-5 col-md-7 col-lg-77 "><input type="text" placeholder="Enter an address"></div>
        <div class="fifty col-sm-7 col-md-5 col-lg-55">
        <div class="hidden-xs col-sm-2 select adva-wrapp">
<<<<<<< HEAD
<!--            <select name="raen" >-->
<!--                <option value="all">Все раены</option>-->
<!--            --><?php
//            require 'selectDistrict.php';
//            ?>
<!--            </select>-->
=======
            <select name="raen" >
                <option value="1">Все районы</option>
                <option value="12">Подольский</option>
                <option value="45">Голосеевский</option>
                <option value="8">Печерский</option>
            </select>
>>>>>>> b9d749eab36effb2877f79592b96f1fe94f3e4eb
        </div>
        <div class="hidden-xs col-sm-2 select adva-wrapp"><select name="dom">
                <option value="14">Все варианты</option>
                <?php
                require 'selectRooms.php';
                ?>
            </select>
        </div>
<<<<<<< HEAD
        <div class="hidden-xs col-sm-2 adva-wrapp"><p class="advanced adv">advanced  </p></div>
       <div class="col-sm-1 btn-wrapp"> <button href="/manual/catalogs" class="sub"><span class="hidden-xs icon-search"></span><span class="visible-xs">Go</span></button></div>


=======
        <div class="hidden-xs col-sm-2 adva-wrapp"><p class="advanced adv">Настройки</p></div>
       <div class="col-sm-1 btn-wrapp"> <button class="sub"><span class="hidden-xs icon-search"></span><span class="visible-xs">Go</span></button></div>
>>>>>>> b9d749eab36effb2877f79592b96f1fe94f3e4eb
    </div>
    </div>
    <div class="dop-filter col-xs-12 col-md-12 clearfix" id="select">
        <div  class="col-xs-6 col-sm-3 col-md-3 select">
            <select name="city">
                <?php
                require 'selectCity.php';
                ?>
            </select>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 select" >
            <select name="raen">
                <option value="all">Все варианты</option>
                <?php
                require 'selectDistrict.php';
                ?>

            </select>

        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 select">
            <select name="uarus">
                <option value="1">Этаж</option>
                <option value="2">1-й</option>
                <option value="3">2-й</option>
                <option value="4">3-й</option>
                <option value="5">4-й</option>
            </select>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 select">
            <select name="room">
                <option value="all">Все варианты</option>
                <?php
                require 'selectRooms.php';
                ?>
            </select>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 polz">
                <input type="text" id="range" value="" name="range" min="100" max="1000"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 polz polz1">
                <input type="text" id="sq_m" value="" name="sq_m" min="2222"/>
        </div>
    </div>

</form>
 </div>
    </div>

