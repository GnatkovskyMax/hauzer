<?php
for ($i = 0; $i < count($data['objects']); $i++):
?>
    <dev class="sectionPost">
        <div class="disp el-background backgroundNews">
            <a class="element-shadow" href="/manual/post/<?= $data['objects'][$i]{'id'} ?>">
                <div class="wrapImgNews disp">
                    <img src="/assets/img/imgNews/<?= $data['objects'][$i]{'img'} ?>">
                </div>
                <div class="disp wrapText">
                    <span><?= $data['objects'][$i]['pubdate'] ?></span>
                    <h2><?= $data['objects'][$i]['title'] ?></h2>
                    <p><?= $data['objects'][$i]['basic_description'] ?></p>
                </div>
            </a>
        </div>
    </dev>
<?php endfor; ?>