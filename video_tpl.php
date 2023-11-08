<?php include TEMPLATE . LAYOUT .  COMPONENT . "ArticleHeader.php";  ?>
<section class="section-content-main">
    <?php if (!empty($video)) { ?>
        <div class="grid_video grid-container">
            <?php foreach ($video as $k => $v) : ?>
                <?php include TEMPLATE . LAYOUT .  COMPONENT . "video_item.php";  ?>
            <?php endforeach ?>
        </div>
    <?php  } else { ?>
        <div class="alert alert-warning w-100" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
</section>