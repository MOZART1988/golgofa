<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\modules\content\models\Content */
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

        <?= $form->field($model, 'slug')->textInput(['disabled' => true])?>

        <?= $form->field($model, 'template_type')->dropDownList(\app\modules\content\models\Content::$types)?>

        <?= $form->field($model, 'text')->widget(\app\components\CKEditor::class, [
            'enableKCFinder' => true,
            'clientOptions' => [
                'customConfig' => '/admin/ckeditor/about-config.js',
            ]
        ])?>

        <?= $form->field($model, 'image')->fileInput() ?>

        <?php if (!empty($model->image)) : ?>
            <?= Html::img($model->getThumbUploadUrl('image', 'list'), ['class' => 'img-thumbnail']) ?>
        <?php endif; ?>

        <?= $form->field($model, 'is_active')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('users', 'Создать') : Yii::t('users', 'Сохранить'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
            ) ?>
        </div>

    </div>

    <div class="col-lg-5">
        <h4>Мета тэги</h4>
        <?= $form->field($model, 'meta_title')->textInput() ?>
        <?= $form->field($model, 'meta_description')->textarea() ?>
        <?= $form->field($model, 'meta_keywords')->textarea() ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
