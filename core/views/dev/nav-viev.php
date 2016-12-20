<div class="nav-wrapp view-menu col-xs-12 col-sm-8 col-md-8 col-md-pull-2 col-lg-8 col-lg-pull-2">
<ul class="nav">
	<?php foreach($menu as $m): ?>
		<li><a href="<?= $m['url'] ?>"
<?php if('/' == $_SERVER['REQUEST_URI']){$_SERVER['REQUEST_URI'] ='main/index';
    echo 'id="active-link"';
}
else if($m['url'] == $_SERVER['REQUEST_URI']){ echo 'id="active-link"';}
?>>
<?= $m['label'] ?>
            </a>


            <?php if(!empty($m['children'])): ?>


            <ul class="dop-link">
                <li><a href="">ll</a></li>
                <li><a href="">ll</a></li>
                <li><a href="">kk</a></li>
            </ul>

    <?php
    endif;
    endforeach;
     ?>
    </li>
</ul>
<!--    <div class="show-dop-link"> show</div>-->
	<div class=" hide-menu visible-xs">X</div>
</div>

