<?php
/**
 * @var \app\modules\basepage\models\Pastor $pastor
 * @var \app\modules\events\models\Event[] $models
 * @var \yii\data\Pagination $pagination
*/
$currentPage = $pagination->page + 1;
use app\modules\custom_variables\models\CustomVariables;
?>
<?=\app\components\widgets\MainpageSliderWidget::widget()?>
<?php if ($pastor !== null) : ?>
<section class="main-block main-pastor">
    <div class="container">
        <h3 class="main-block-title"><?=\Yii::t('front', 'Слово Пастора')?></h3>
        <div class="main-block-text"><?=$pastor->rang?>
            <span><?=$pastor->name?></span>
        </div>
        <figure class="pastor">
            <div class="pastor-img">
                <?=\yii\helpers\Html::img($pastor->getUploadUrl('image'))?>
            </div>
            <figcaption>
                <h4 class="pastor-title"><?=$pastor->title?></h4>
                <article class="pastor-text">
                    <?=$pastor->text?>
                </article>
            </figcaption>
        </figure>
    </div>
</section>
<?php endif; ?>
    <section class="main-block main-events">
        <div class="container">
            <h3 class="main-block-title"><?=CustomVariables::getOrCreate('Текст на главной - новые События цекви', 'новые События церкви')?></h3>
            <div class="main-block-text"><?=CustomVariables::getOrCreate('Текст на главной длинный - новые События цекви', 'В этой ленте вы можете найти все события
            из жизни нашей Церкви')?></div>
            <div class="main-events-link"><a href="<?=\yii\helpers\Url::to(['/events/default/index'])?>"><?=\Yii::t('front', 'Смотреть все события')?></a></div>
            <ul class="main-events-list life-list clearlist">
                <?php foreach ($models as $item) : ?>
                    <?php
                        $date = !empty($item->pub_date) ? $item->pub_date : $item->created_at;
                    ?>
                    <div class="life-item life-item--<?=\app\modules\events\models\Event::$typesClasses[$item->type]?>"
                         style="background-image: url(<?=$item->getUploadUrl('image')?>)">
                        <a <?=($item->type === \app\modules\events\models\Event::TYPE_VIDEO ? 'data-fancybox' : '')?>
                                href="<?=($item->type === \app\modules\events\models\Event::TYPE_VIDEO ? $item->youtube :
                                    \yii\helpers\Url::to(['/events/default/view', 'slug' => $item->slug]))?>">
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
                <?php endforeach ; ?>
            </ul>
            <?php if ($currentPage + 1 <= $pagination->pageCount) : ?>
                <div class="main-events-more">
                    <a data-page="<?=$currentPage?>" href="#" class="btn btn--lucid">
                        <?=\Yii::t('front', 'загрузить еще')?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<section class="main-block main-ministry">
    <div class="container">
        <h3 class="main-block-title"><?=CustomVariables::getOrCreate('Наши проекты на главной', 'Наши проекты')?></h3>
        <div class="main-block-text"><?=CustomVariables::getOrCreate('Текст в разделе наши проекты на главной', 'В этом разделе вы можете найти все поздравления,
            направленные нашей Церкви')?></div>
        <div class="main-ministry-link">
            <a href="<?=\yii\helpers\Url::to(['/content/default/projects'])?>" class="btn"><?=\Yii::t('front', 'Наши проекты')?></a>
        </div>
    </div>
</section>
<?=\app\components\widgets\MainpageNewsWidget::widget()?>