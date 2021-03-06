<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \app\modules\menu\models\MenusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('menu', 'Меню');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menus-index">
    <div class="page-heading">
        <h1>
            <i class="icon-menu"></i><?= Html::encode($this->title) ?></h1>
    </div>

    <p>
        <?= Html::a(Yii::t('menu', '<i class="icon-list-add"></i>Создать меню'), ['create'],
            ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('menu', '<i class="icon-list"></i>Пункты меню'), ['/menu/menu-items/index'],
            ['class' => 'btn btn-info']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => "{items}\n{pager}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a($model->title, $model->getViewUrl());
                }
            ],
            [
                'class' => \app\components\CustomActionColumn::class,
            ],
        ],
    ]); ?>
</div>
