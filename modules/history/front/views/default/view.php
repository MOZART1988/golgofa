<?php
/**
 * @var $model \app\modules\history\models\Subchapters
*/
?>

<div class="title-block " style="background-image: url(/images/history-title-bg.jpg)">
    <div class="container">
        <h1><?=\Yii::t('front', 'Исторический очерк')?></h1>
    </div>
</div>

<main class="page page-history">
    <div class="container">
        <div class="page-content history-controls" id="jsHistoryCtrl">
            <?php if ($model->prev !== null) : ?>
                <a href="<?=\yii\helpers\Url::to(['/history/default/view', 'id' => $model->prev->id])?>" class="history-controls-prev"><?=\Yii::t('front', 'К предыдущей главе')?></a>
            <?php endif; ?>
            <div class="history-controls-link"><a href="<?=\yii\helpers\Url::to(['/history/default/index'])?>" class="btn"><?=\Yii::t('front', 'к Содержанию')?></a></div>
            <?php if ($model->next !== null) : ?>
                <a href="<?=\yii\helpers\Url::to(['/history/default/view', 'id' => $model->next->id])?>" class="history-controls-next"><?=\Yii::t('front', 'К следующей главе')?></a>
            <?php endif; ?>
        </div>
        <div class="page-content history">
            <mark class="history-placemark"><?=$model->chapter->title?></mark>
            <article class="history-article">
                <h2 class="history-article-title"><?=$model->title?></h2>
                <div class="history-article-text">
                    <?=$model->getFormattedText()?>
                </div>
            </article>
        </div>

    </div>
</main>

