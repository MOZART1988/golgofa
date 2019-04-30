<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model \app\modules\events\models\Category */

$this->title = Yii::t('admin', 'Просмотр текстовой страницы', [
    'modelClass' => 'Content',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Текстовые страницы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo \mtemplate\widgets\BreadWidget::widget(['breads' => $this->params['breadcrumbs']]);
?>
<div class="content-view container">
    <div class="page-heading">
        <h1> <?= Html::encode($this->title) ?></h1>
    </div>
    <?=\yii\widgets\DetailView::widget([
        'model' => $model
    ]);?>
</div>
