<?php

use yii\helpers\Html;
use yiister\gentelella\widgets\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \app\modules\content\models\ScedulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('admin', 'Расписание');
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
        <?= Html::a(Yii::t('admin', 'Добавить элемент', [
            'modelClass' => 'Scedules',
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
                    return Html::a($model->title, \yii\helpers\Url::to(['/content/scedules/update', 'id' => $model->id]));
                }
            ],
            [
                'attribute' => 'week_day',
                'value' => function ($model) {
                    /**
                     * @var \app\modules\content\models\Scedules $model
                    */

                    return \app\modules\content\models\Scedules::$days[$model->week_day];
                },
                'filter' => \app\modules\content\models\Scedules::$days
            ],
            'created_at',
            [
                'class' => \app\components\CustomActionColumn::class,
            ],
        ],
    ]); ?>
</div>

