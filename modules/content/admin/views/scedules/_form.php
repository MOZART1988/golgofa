<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\modules\content\models\Scedules */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="content-form row">
    <?php $form = ActiveForm::begin(
        [
            'enableClientValidation' => ($model->isNewRecord) ? true : false,
            'options' => ['enctype' => 'multipart/form-data']
        ]); ?>

    <div class="col-lg-7">

        <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

        <?= $form->field($model, 'week_day')->dropDownList(\app\modules\content\models\Scedules::$days)?>

        <?=$form->field($model, 'time')->textInput()?>

        <?= $form->field($model, 'is_active')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('users', 'Создать') : Yii::t('users', 'Сохранить'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
            ) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>
</div>
