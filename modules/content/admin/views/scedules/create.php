<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model \app\modules\content\models\Scedules */

$this->title = Yii::t('admin', 'Создание элемента', [
    'modelClass' => 'Scedules',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Расписание'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
echo \mtemplate\widgets\BreadWidget::widget(['breads' => $this->params['breadcrumbs']]);
?>

<div class="content-create container">
    <h1> <?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
