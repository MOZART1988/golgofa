<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model \app\modules\events\models\Category */

$this->title = Yii::t('admin', 'Создание рубрики', [
    'modelClass' => 'Category',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Рубрики'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
echo \mtemplate\widgets\BreadWidget::widget(['breads' => $this->params['breadcrumbs']]);
?>

<div class="content-create container">
    <h1> <?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
