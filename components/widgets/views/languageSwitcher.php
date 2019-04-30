<?php
/**
 * @var \app\modules\languages\models\Languages[] $languages
*/
?>

<ul class="header-lang clearlist">
    <?php foreach ($languages as $item) : ?>
        <li class="<?=(\Yii::$app->language === $item->code ? 'active' : '')?>">
            <a href="<?=\yii\helpers\Url::to('/' . $item->code)?>"><?=$item->title?></a>
        </li>
    <?php endforeach; ?>
</ul>
