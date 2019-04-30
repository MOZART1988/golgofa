<?php

use yii\helpers\Html;
use yiister\gentelella\widgets\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \app\modules\history\models\ChaptersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('admin', 'Главы');
$this->params['breadcrumbs'][] = $this->title;

echo \yii\widgets\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>
<div class="content-index container">
    <div class="page-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <p>
        <?= Html::a(Yii::t('admin', 'Добавить главу', [
            'modelClass' => 'Chapters',
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
                    return Html::a($model->title, \yii\helpers\Url::to(['/history/subchapter/index', 'SubchaptersSearch[chapter_id]' => $model->id]));
                }
            ],
            'created_at',
            [
                'class' => \app\components\CustomActionColumn::class,
            ],
        ],
    ]); ?>
</div>

