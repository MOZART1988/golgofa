<?php
/**
 * @var \app\modules\basepage\models\Pastor $model
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('admin', 'Слово пастора', [
    'modelClass' => 'Content',
]);

$this->params['breadcrumbs'][] = $this->title;
echo \mtemplate\widgets\BreadWidget::widget(['breads' => $this->params['breadcrumbs']]);

?>

<div class="content-create container">
    <h1> <?= Html::encode($this->title) ?></h1>

    <div class="content-form row">
        <div class="col-lg-7">
            <?php $form = ActiveForm::begin(
                [
                    'enableClientValidation' => ($model->isNewRecord) ? true : false,
                    'options' => ['enctype' => 'multipart/form-data']
                ]); ?>

            <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

            <?= $form->field($model, 'text')->widget(\app\components\CKEditor::class, [
                'enableKCFinder' => true,
                'clientOptions' => [
                    'customConfig' => '/admin/ckeditor/about-config.js',
                ]
            ])?>

            <?= $form->field($model, 'name')->textInput()?>

            <?= $form->field($model, 'rang')->textInput()?>

            <?= $form->field($model, 'image')->fileInput() ?>

            <?php if (!empty($model->image)) : ?>
                <?= Html::img($model->getThumbUploadUrl('image', 'list'), ['class' => 'img-thumbnail']) ?>
            <?php endif; ?>

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
</div>