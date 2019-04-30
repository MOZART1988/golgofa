<?php

use yii\helpers\Html;
use yiister\gentelella\widgets\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \app\modules\pages\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('admin', 'Новости');
$this->params['breadcrumbs'][] = $this->title;

echo \yii\widgets\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>
<div class="content-index container">
    <div class="page-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="alert alert-info" role="alert">
        Страница списка статей доступна по ссылке /ru|kk/news/
    </div>
    <p>
        <?= Html::a(Yii::t('admin', 'Добавить новость', [
            'modelClass' => 'Pages',
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
            [
                'attribute' => 'add_to_mainpage',
                'filter' => [1 => 'Да', 0 => 'Нет'],
                'value' => function ($model) {
                    /**
                     * @var \app\modules\pages\models\Pages $model
                    */

                    return $model->add_to_mainpage === 1 ? 'Да': 'Нет';
                }
            ],
            'created_at',
            [
                'class' => \app\components\CustomActionColumn::class,
            ],
        ],
    ]); ?>
</div>

