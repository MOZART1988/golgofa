<?php

use yii\helpers\Html;
use yiister\gentelella\widgets\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\gallery\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('gallery', 'Галереи');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content-index container">
    <div class="page-heading">
        <h1> <?= Html::encode($this->title) ?></h1>
    </div>
    <p>
        <?= Html::a(Yii::t('admin', 'Добавить галерею', [
            'modelClass' => 'Gallery',
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
                    return Html::a($model->title, $model->getViewUrl());
                }
            ],
            'created_at',
            [
                'class' => \app\components\CustomActionColumn::class,
            ],
        ],
    ]); ?>
</div>
