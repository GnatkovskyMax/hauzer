<?php
require_once 'dev/filter.php';
?>

<section>
    <h1><?= $data['objects'][0]['title'] ?></h1>
    <span><?= $data['objects'][0]['pubdate'] ?></span>
        <p>
            <img class="wrapImgPost" src="/assets/img/imgNews/62c46a53de2e624eb5b2.png">
            <?= $data['objects'][0]['content'] ?>
        </p>
    </div>
</section>

<?php
