<?php
/**
 * @var \app\modules\content\models\Projects[] $models
 */

?>
<div class="title-block " style="background-image: url(/images/channels-title-bg.jpg)">
    <div class="container">
        <h1><?=\Yii::t('front', 'Наши проекты')?></h1>
    </div>
</div>

<main class="page page-channels">
    <div class="container">
        <div class="main-block-text"><?=\Yii::t('front', 'В данном разделе мы размещаем все наши проекты, перейдя в которые вы можете узнать для себя
            <br> много нового и полезного')?></div>
        <ul class="channels clearlist">
            <?php foreach ($models as $item) : ?>
                <li class="channels-item">
                    <a href="<?=$item->link?>" <?=($item->is_new_page === 1 ? 'target="_blank"' : '')?>>
                        <div class="channels-item-img">
                            <img src="<?=$item->getUploadUrl('image')?>" alt="<?=$item->title?>">
                        </div>
                        <h4 class="channels-item-title"><?=$item->title?></h4>
                        <p class="channels-item-text"><?=$item->text?></p>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>
