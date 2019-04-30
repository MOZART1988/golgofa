<?php
/**
 * @var \app\modules\content\models\Donation $model
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('admin', 'Поддержать служение Церкви', [
    'modelClass' => 'Donation',
]);

$this->params['breadcrumbs'][] = $this->title;
echo \mtemplate\widgets\BreadWidget::widget(['breads' => $this->params['breadcrumbs']]);

?>

<div class="content-create container">
    <div class="alert alert-info" role="alert">
        Страница доступна по адресу /ru|kk/donation/
    </div>

    <h1> <?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(
        [
            'enableClientValidation' => ($model->isNewRecord) ? true : false,
            'options' => ['enctype' => 'multipart/form-data']
        ]); ?>
    <div class="content-form row">
        <div class="col-lg-7">

            <?=$form->field($model, 'title')->textInput()?>

            <?= $form->field($model, 'text')->textarea(); ?>

            <?= $form->field($model, 'requisites')->textarea(); ?>

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
        </div>
        <div class="col-lg-5">
            <h4>Мета тэги</h4>
            <?= $form->field($model, 'meta_title')->textInput() ?>
            <?= $form->field($model, 'meta_description')->textarea() ?>
            <?= $form->field($model, 'meta_keywords')->textarea() ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>