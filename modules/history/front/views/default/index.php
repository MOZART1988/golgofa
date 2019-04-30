<?php
/**
 * @var \yii\data\Pagination $pagination
 * @var \app\modules\history\models\Chapters[] $models
*/
$currentPage = $pagination->page + 1;
$currentLang = \app\modules\languages\models\Languages::getCurrent()->code;
?>
<div class="title-block " style="background-image: url(/images/history-title-bg.jpg)">
    <div class="container">
        <h1><?=\Yii::t('front', 'Исторический очерк')?></h1>
    </div>
</div>

<main class="page page-history">
    <div class="container">
            <div class="page-content history-controls" id="jsHistoryCtrl">
                <a href="<?=($currentPage <= 1 ? '#' :
                    '/' . $currentLang . \yii\helpers\Url::to(['/history/default/index', 'page' => $currentPage - 1]))?>" class="history-controls-prev">
                    <?=\Yii::t('front', 'К предыдущей странице')?></a>
                <div class="history-controls-pages">
                    <span><b><?=$currentPage ?></b> / <?=$pagination->pageCount?></span>
                </div>
                <a href="<?=($currentPage === $pagination->pageCount ? '#' :
                    '/' . $currentLang . \yii\helpers\Url::to(['/history/default/index', 'page' => $currentPage + 1]))?>" class="history-controls-next"><?=\Yii::t('front', 'К следующей странице')?></a>
            </div>

        <div class="page-content history">
            <mark class="history-placemark"><?=\Yii::t('front', 'Содержание')?></mark>
            <div class="history-contents">
                <?php foreach ($models as $model) : ?>
                    <?php
                        /**
                         * @var \app\modules\history\models\Chapters $model
                        */
                    ?>
                    <article class="history-contents-article">
                        <h3><?=$model->title?></h3>
                        <p><?=$model->sub_title?></p>
                        <?php if(!empty($model->subchapters)) : ?>
                            <ul>
                                <?php foreach ($model->subchapters as $item) : ?>
                                    <li>
                                        <a href="<?=\yii\helpers\Url::to(['/history/default/view', 'id' => $item->id])?>">
                                            <?=$item->title?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                    </article>
                <?php endforeach ; ?>
            </div>
        </div>

    </div>
</main>
