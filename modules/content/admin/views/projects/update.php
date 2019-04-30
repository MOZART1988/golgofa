<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \app\modules\content\models\Projects */

$this->title = Yii::t('admin', 'Изменение проекта: ', [
        'modelClass' => 'Content',
    ]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Текстовые страницы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('admin', 'Изменение');

//echo \mtemplate\widgets\BreadWidget::widget(['breads' => $this->params['breadcrumbs']]);
?>


<div class="content-update container">
    <div class="page-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
