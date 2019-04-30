<?php

use yii\helpers\Html;
use yiister\gentelella\widgets\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \app\modules\content\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('admin', 'Слайдер');
$this->params['breadcrumbs'][] = $this->title;

echo \yii\widgets\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>
<div class="content-index container">
    <div class="page-heading">
        <h1><i class="icon-users"></i> <?= Html::encode($this->title) ?></h1>
    </div>
    <p>
        <?= Html::a(Yii::t('admin', 'Добавить слайд', [
            'modelClass' => 'Slides',
        ]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
                    return Html::a($model->title, \yii\helpers\Url::to(['/basepage/slides/update', 'id' => $model->id]));
                }
            ],
            'created_at',
            [
                'value' => function ($data) {
                    return Html::a(
                            '<i class="glyphicon glyphicon-arrow-up"></i>',
                            ['move', 'id' => $data->id, 'type' => 'up'],
                            ['class' => 'btn btn-info']
                        ) . '&nbsp;&nbsp;' .
                        Html::a(
                            '<i class="glyphicon glyphicon-arrow-down"></i>',
                            ['move', 'id' => $data->id, 'type' => 'down'],
                            ['class' => 'btn btn-info']
                        );
                },
                'format' => 'raw',
                'options' => ['align' => 'center']
            ],
            [
                'class' => \app\components\CustomActionColumn::class,
            ],
        ],
    ]); ?>
</div>

