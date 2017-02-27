<!--<section class="info-agent">-->
<!--    <h2>Информация об агенете</h2>-->
    <img class="disp" src="/assets/img/img_agents/<?=$data['agents'][0]['photo_agent'] ?>.png">
    <div class="info disp">
        <h3><?=$data['agents'][0]['name'] ?> <?=$data['agents'][0]['surname'] ?></h3>
        <p>тел: <?=$data['agents'][0]['tel'] ?></p>
        <p>mail: <?=$data['agents'][0]['mail'] ?></p>
        <p>skype: <?=$data['agents'][0]['skype'] ?></p>
        <p> <?=$data['agents'][0]['position'] ?></p>
    </div>
    <P><?=$data['agents'][0]['info_agents'] ?></P>
<!--</section>-->