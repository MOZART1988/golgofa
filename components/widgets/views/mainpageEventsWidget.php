<?php
/**
 * @var \app\modules\events\models\Event $items[]
 * @var integer $count
 */
?>
<section class="main-block main-events">
    <div class="container">
        <h3 class="main-block-title"><?=\Yii::t('front', 'новые События церкви')?></h3>
        <div class="main-block-text"><?=\Yii::t('front', 'В этой ленте вы можете найти все события
            из жизни нашей Церкви')?></div>
        <div class="main-events-link"><a href="<?=\yii\helpers\Url::to(['/events/default/index'])?>"><?=\Yii::t('front', 'Смотреть все события')?></a></div>
        <ul class="main-events-list life-list clearlist">
            <?php foreach ($items as $item) : ?>
                <div class="life-item life-item--<?=\app\modules\events\models\Event::$typesClasses[$item->type]?>"
                     style="background-image: url(<?=$item->getUploadUrl('image')?>)">
                    <a <?=($item->type === \app\modules\events\models\Event::TYPE_VIDEO ? 'data-fancybox' : '')?>
                        href="<?=($item->type === \app\modules\events\models\Event::TYPE_VIDEO ? $item->youtube :
                            \yii\helpers\Url::to(['/events/default/view', 'slug' => $item->slug]))?>">
                        <i class="life-item-icon"></i>
                        <time class="life-item-date">
                            <b><?=\Yii::$app->formatter->asDate($item->created_at, 'php:d')?></b>
                            <?=\Yii::$app->formatter->asDate($item->created_at, 'php:M Y')?>
                        </time>
                        <h3 class="life-item-title"><?=$item->title?> ...</h3>
                        <div class="life-item-info">
                            <?=$item->getHtmlTags()?>
                            <?php if (!empty($item->meta)) : ?>
                                <span class="life-item-meta"><?=$item->meta?></span>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            <?php endforeach ; ?>
        </ul>
        <?php if ($count > 6) : ?>
            <div class="main-events-more">
                <a href="" class="btn btn--lucid"><?=\Yii::t('front', 'загрузить еще')?></a>
            </div>
        <?php endif; ?>
    </div>
</section>
