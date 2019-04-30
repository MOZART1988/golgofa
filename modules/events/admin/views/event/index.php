<?php

use yii\helpers\Html;
use yiister\gentelella\widgets\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \app\modules\events\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('admin', 'События');
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
        Страница списка событий церкви доступна по ссылке /ru|kk/events/
    </div>

    <p>
        <?= Html::a(Yii::t('admin', 'Добавить событие', [
            'modelClass' => 'Event',
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
                    return Html::a($model->title, \yii\helpers\Url::to(['/events/event/update', 'id' => $model->id]));
                }
            ],
            [
                'attribute' => 'categoryId',
                'header' => 'Категория',
                'filter' => \app\modules\events\models\Category::getDropdownList(),
                'value' => function ($model) {
                    /**
                     * @var \app\modules\events\models\Event $model
                    */

                    return $model->category ? $model->category->title : null;
                }

            ],
            [
                'attribute' => 'type',
                'filter' => \app\modules\events\models\Event::$types,
                'value' => function ($model) {
                    /**
                     * @var \app\modules\events\models\Event $model
                    */

                    return \app\modules\events\models\Event::$types[$model->type];

                }
            ],
            'pub_date',
            [
                'class' => \app\components\CustomActionColumn::class,
            ],
        ],
    ]); ?>
</div>

