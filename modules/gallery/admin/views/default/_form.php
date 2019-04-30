<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

// The controller action that will render the list
$url = \yii\helpers\Url::to(['/pages/default/list']);

// Script to initialize the selection based on the value of the select2 element
$initScript = <<< SCRIPT
function (element, callback) {
    var id=\$(element).val();
    if (id !== "") {
        \$.ajax("{$url}?id=" + id, {
            dataType: "json"
        }).done(function(data) { callback(data.results);});
    }
}
SCRIPT;

/* @var $this yii\web\View */
/* @var $model app\modules\gallery\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="content-form  gallery-form">

    <?php $form = ActiveForm::begin(['id' => 'gallery-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'uploadedImage[]')->widget(\kartik\file\FileInput::class, [
        'options'=>[
            'multiple'=>true,
            'accept'=>'image/*'
        ],
        'pluginOptions' => [
            'showUpload' => false,
            'initialPreview'=> $model->getImagesUrl(),
            'initialPreviewAsData'=>true,
            'initialPreviewConfig' => $model->getImagesPreviewConfig(),
            'overwriteInitial'=>false,
            'maxFileSize'=>2800,
        ]
    ])?>

    <?= Html::submitButton($model->isNewRecord ? Yii::t('categories', 'Создать') : Yii::t('categories',
        'Сохранить'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>

</div>
