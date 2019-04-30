<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700|Roboto:300,400,400i,500,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php $this->beginBody() ?>
<div class="wrapper">
    <?=$this->render('_partials/_header')?>
    <main class="main">
        <?=$content?>
    </main>
</div>
<?=$this->render('_partials/_footer')?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
