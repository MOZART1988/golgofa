<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\gallery\models\Gallery */

$this->title = Yii::t('gallery', 'Изменение галереи:') . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('gallery', 'Galleries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('gallery', 'Update');
?>

<div class="content-create container">
    <h1> <?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
