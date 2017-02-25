<!--if(-->
<!--    count($_GET)>5&&getUrlSegment(1)=="catalogs"||-->
<!--    getUrlSegment(1)=="index"||-->
<!--    !getUrlSegment(2)=="rent"&&getUrlSegment(1)=="catalogs"||-->
<!--    !getUrlSegment(2)=="sale"&&getUrlSegment(1)=="catalogs"-->
<!--    ){-->
<!--    echo "";-->
<!--    require 'helper-panel-phone.php';-->
<!--}-->
<!--else{-->
<!--    echo "<body >";-->
<!--}-->
<div class="helper-panel">
    <?php if($rent==true){?>
    <div class="helper-btn rent-scroll"></div>
    <?php }
    if($sale==true){
    ?>
    <div class="helper-btn sale-scroll"></div>
    <?php }?>
    <div class="helper-btn call"></div>
    <div class="helper-btn up-scroll"></div>
</div>