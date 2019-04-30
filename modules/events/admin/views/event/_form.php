<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\modules\events\models\Event */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="content-form row">
    <?php $form = ActiveForm::begin(
        [
            'enableClientValidation' => ($model->isNewRecord) ? true : false,
            'options' => ['enctype' => 'multipart/form-data']
        ]); ?>
    <div class="col-lg-6">

        <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

        <?= $form->field($model, 'slug')->textInput(['disabled' => true])?>

        <?= $form->field($model, 'short_text')->textarea()?>

        <?= $form->field($model, 'text')->widget(\app\components\CKEditor::class, [
            'enableKCFinder' => true,
            'clientOptions' => [
                'customConfig' => '/admin/ckeditor/about-config.js',
            ]
        ])?>

        <?= $form->field($model, 'meta')->textInput() ?>

        <?= $form->field($model, 'youtube')->textInput()?>

        <?= $form->field($model, 'add_to_mainpage')->checkbox()?>

        <?= $form->field($model, 'is_active')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('admin', 'Создать') : Yii::t('admin', 'Сохранить'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
            ) ?>
        </div>

    </div>
    <div class="col-lg-4">

        <?=$form->field($model, 'type')->dropDownList(\app\modules\events\models\Event::$types)?>

        <?=$form->field($model, 'listCategories')->widget(\kartik\select2\Select2::class, [
            'options' => ['placeholder' => 'Выберите рубрику...', 'multiple' => true],
            'data' => \yii\helpers\ArrayHelper::map(\app\modules\events\models\Category::find()->active()->all(), 'id', 'title'),
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]);?>

        <?= $form->field($model, 'listTags')->widget(\dosamigos\selectize\SelectizeTextInput::class, [
            'loadUrl' => ['/events/event/find-tags'],
            'options' => ['class' => 'form-control'],
            'clientOptions' => [
                'plugins' => ['remove_button'],
                'valueField' => 'name',
                'labelField' => 'name',
                'searchField' => ['name'],
                'create' => true,
            ],
        ]) ?>

        <?= $form->field($model, 'image')->fileInput() ?>

        <?php if (!empty($model->image)) : ?>
            <?= Html::img($model->getThumbUploadUrl('image', 'list'), ['class' => 'img-thumbnail']) ?>
        <?php endif; ?>

        <?= $form->field($model, 'pub_date')->widget(\dosamigos\datepicker\DatePicker::class, [
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
        ])?>

        <h4>Мета тэги</h4>

        <?= $form->field($model, 'meta_title')->textInput() ?>
        <?= $form->field($model, 'meta_description')->textarea() ?>
        <?= $form->field($model, 'meta_keywords')->textarea() ?>

    </div>

    <?php ActiveForm::end(); ?>
</div>
