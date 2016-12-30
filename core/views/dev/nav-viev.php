<div class="nav-wrapp view-menu col-xs-12 col-sm-8 col-md-8 col-md-pull-2 col-lg-8 col-lg-pull-2">
<ul class="nav">
<?php foreach($menu as $m): ?>
		       <li class="view_dop_link"><a href="<?= $m['url'] ?>"
    <?php if('/' == $_SERVER['REQUEST_URI']){$_SERVER['REQUEST_URI'] ='main/index';
    echo 'id="active-link"';
    }
     else if($m['url'] == $_SERVER['REQUEST_URI']){ echo 'id="active-link"';}
    ?>><?= $m['label'] ?></a>
            <?php if(!empty($m['children'])): ?>
                              <ul class="dop-link">
                         <?php foreach($m['children'] as $ch):  ?>
                             <li><a href="<?= $ch['url']?>"><?= $ch['label']?></a><span class="hidden-xs">/</span></li>
                         <?php endforeach;?>
                              </ul>
           <?php endif;
endforeach; ?>
</ul>
<!--    <div class="show-dop-link"> show</div>-->
	<div class=" hide-menu visible-xs"></div>
</div>

