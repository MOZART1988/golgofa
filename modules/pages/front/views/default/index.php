<?php
/**
 * @var \yii\data\ActiveDataProvider $dataProvider
 */
?>

<div class="title-block " style="background-image: url(/images/news-title-bg.jpg)">
    <div class="container">
        <h1><?=\Yii::t('front', 'Статьи')?></h1>
    </div>
</div>

<main class="page page-news">
    <div class="container">
        <div class="news-list">
            <?php foreach ($dataProvider->getModels() as $item) : ?>
                <?php
                    /**
                     * @var \app\modules\pages\models\Pages $item
                    */
                ?>
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
        <?php if ($dataProvider->pagination->pageCount > 1) : ?>
            <div class="news-link">
                <a href="" class="btn btn--load"><?=\Yii::t('front', 'загрузить еще')?></a>
            </div>
        <?php endif; ?>
    </div>
</main>

