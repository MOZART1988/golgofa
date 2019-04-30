<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\modules\events\models\Category */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="content-form row">
    <div class="col-lg-7">
        <?php $form = ActiveForm::begin(
            [
                'enableClientValidation' => ($model->isNewRecord) ? true : false,
                'options' => ['enctype' => 'multipart/form-data']
            ]); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

        <?= $form->field($model, 'slug')->textInput(['disabled' => true])?>

        <?= $form->field($model, 'is_active')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('admin', 'Создать') : Yii::t('admin', 'Сохранить'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
            ) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
