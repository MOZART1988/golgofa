<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \app\modules\menu\models\MenuItems */

$this->title = Yii::t('menu', 'Изменение пункта меню') . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('menu', 'Меню'), 'url' => ['/menu']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('menu', 'пункты меню'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('menu', 'Изменение');

echo \mtemplate\widgets\BreadWidget::widget(['breads' => $this->params['breadcrumbs']]);
?>
<div class="menu-items-update">
    <div class="page-heading">
        <h1><i class="icon-menu"></i> <?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
