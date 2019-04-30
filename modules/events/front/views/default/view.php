<?php
/**
 * @var \app\modules\events\models\Event $model
 */
?>
<div class="title-block title-block--big" style="background-image: url(/images/news-page-title-bg.jpg)">
    <div class="container">
        <h1><?=$model->title?></h1>
        <time><?=\Yii::$app->formatter->asDate($model->pub_date ?: $model->created_at, 'php: d mm Y')?></time>

    </div>
</div>

<main class="page page-news">
    <div class="container container--news">
        <div class="news-content">
            <article class="news-article">
                <?=$model->getFormattedText()?>
            </article>
        </div>
        <div class="news-share">
            <p><?=\Yii::t('front', 'Поделиться новостью с друзьями')?></p>
            <ul class="clearlist social-likes">
                <li data-service="facebook"><a href=""><img src="/images/icons/icon-fb-1.png" alt=""></a></li>
                <li data-service="vkontakte"><a href=""><img src="/images/icons/icon-vk-1.png" alt=""></a></li>
                <li data-service="odnoklassniki"><a href=""><img src="/images/icons/icon-ok.png" alt=""></a></li>
                <li data-service="twitter"><a href=""><img src="/images/icons/icon-tw.png" alt=""></a></li>
                <li data-service="plusone"><a href=""><img src="/images/icons/icon-gg.png" alt=""></a></li>
            </ul>
        </div>
        <div class="news-back">
            <a href="<?=\yii\helpers\Url::to(['/events/default/index'])?>" class="btn btn--back"><?=\Yii::t('front', 'К другим событиям')?></a>
        </div>
    </div>
</main>
