<?php
/**
 * @var \app\modules\basepage\models\Slides $items[]
 */
?>
<section class="top-slider">
    <div id="jsTopSlider">
        <?php foreach ($items as $item) : ?>
            <div class="top-slide">
                <div class="container">
                    <?php if ($item->is_main_event) : ?>
                        <div class="top-slide-type"><?=\Yii::t('front', 'Главное событие недели')?></div>
                    <?php endif; ?>
                    <h3 class="top-slide-title"><?=$item->title?></h3>
                    <div class="top-slide-text"><?=$item->text?> ...</div>
                    <div class="top-slide-link">
                        <a href="<?=$item->link?>" <?=($item->is_new_page ? 'target="_blank"' : '')?> class="btn"><?=\Yii::t('front', 'Узнать больше')?></a>
                    </div>
                </div>
            </div>
        <?php endforeach ; ?>
    </div>
    <div class="top-slider-control">
        <button class="top-slider-prev">prev</button>
        <div class="top-slider-counter">
            <span class="curr"></span> / <span class="all"></span>
        </div>
        <button class="top-slider-next">next</button>
    </div>
</section>
