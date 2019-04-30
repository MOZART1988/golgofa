<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \app\modules\custom_variables\models\CustomVariablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('users', 'Переменные');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">
    <div class="page-heading">
        <h1><i class="icon-users"></i> <?= Html::encode($this->title) ?></h1>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => "{items}\n{pager}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a($model->title, $model->getViewUrl());
                }
            ],
            [
                'attribute' => 'is_active',
                'value' => function ($model) {
                    return $model->is_active === 1 ? 'Да' : 'Нет';
                },
                'filter' => [0 => 'Нет', 1 => 'Да']
            ],
            [
                'class' => \app\components\CustomActionColumn::class,
            ],
        ],
    ]); ?>
</div>

