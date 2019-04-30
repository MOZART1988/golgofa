<?php
/**
 * @var \app\modules\pages\models\Pages[] $pages
*/
?>

<section class="main-block main-news">
    <div class="container">
        <h3 class="main-block-title"><?=\Yii::t('front', 'Статьи')?></h3>
        <div class="news-slider-arrows"></div>
        <div class="news-slider" id="jsNewsSlider">
            <?php foreach ($pages as $item) : ?>
                <div class="news-item">
                    <div class="news-item-wrapper" style="background-image: url(<?=$item->getUploadUrl('image')?>)">
                        <a href="<?=\yii\helpers\Url::to(['/pages/default/view', 'slug' => $item->slug])?>" class="news-item-caption">
                            <time class="news-item-date"><b><?=\Yii::$app->formatter->asDate($item->created_at, 'php:d')?></b>
                                <?=\Yii::$app->formatter->asDate($item->created_at, 'php:M Y')?></time>
                            <h3 class="news-item-title"><?=$item->title?></h3>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="main-news-link">
            <a href="<?=\yii\helpers\Url::to(['/pages/default/index'])?>" class="btn btn--lucid"><?=\Yii::t('front', 'Смореть все новости')?></a>
        </div>
    </div>
</section>

