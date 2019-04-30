<?php
/**
 * @var \app\modules\events\models\Event[] $models
 * @var \app\modules\events\models\Category[] $categories
 * @var \yii\data\Pagination $pagination
*/

$currentPage = $pagination->page + 1;

?>

<div class="title-block " style="background-image: url(/images/life-title-bg.jpg)">
    <div class="container">
        <h1><?=\Yii::t('front', 'Жизнь церкви')?></h1>
    </div>
</div>

<main class="page page-life">
    <div class="container">

        <div class="life-categories" id="jsLifeCat">
            <a href="" class="life-categories-toggle"></a>
            <ul class="clearlist">
                <li><?=\Yii::t('front', 'Указать рубрику:')?></li>
                <li><a data-id="all" href="#all"><?=\Yii::t('front', 'Все рубрики')?></a></li>
                <?php foreach ($categories as $category) : ?>
                    <li><a data-id="<?=$category->id?>" href="#<?=$category->title?>"><?=$category->title?></a></li>
                <?php endforeach ; ?>
            </ul>
        </div>

        <ul class="main-events-list life-list clearlist">
            <?php foreach ($models as $item) : ?>
                <?php
                    /**
                     * @var \app\modules\events\models\Event $item
                    */

                    $date = !empty($item->pub_date) ? $item->pub_date : $item->created_at;
                ?>
                <div class="life-item life-item--<?=\app\modules\events\models\Event::$typesClasses[$item->type]?>"
                     style="background-image: url(<?=$item->getUploadUrl('image')?>)">
                    <a <?=($item->type === \app\modules\events\models\Event::TYPE_VIDEO ? 'data-fancybox' : '')?>
                        href="<?=($item->type === \app\modules\events\models\Event::TYPE_VIDEO ? $item->youtube :
                        \yii\helpers\Url::to(['/events/default/view/', 'slug' => $item->slug]))?>">
                        <i class="life-item-icon"></i>
                        <time class="life-item-date">
                            <b><?=\Yii::$app->formatter->asDate($date, 'php:d')?></b>
                            <?=\Yii::$app->formatter->asDate($date, 'php:M Y')?>
                        </time>
                        <h3 class="life-item-title"><?=$item->title?> ...</h3>
                        <div class="life-item-info">
                            <?=$item->getHtmlCategories()?>
                            <?php if (!empty($item->meta)) : ?>
                                <span class="life-item-meta"><?=$item->meta?></span>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </ul>

        <div class="ajax-more">
            <?php if ($currentPage + 1 <= $pagination->pageCount) : ?>
                <div class="news-gallery-load">
                    <a data-page="<?=$currentPage?>"
                       data-query="<?=\Yii::$app->request->queryString?>" href="" class="btn btn--load ">
                        <?=\Yii::t('front', 'загрузить еще')?>
                    </a>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>
