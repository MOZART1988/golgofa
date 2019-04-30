<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\languages\models\Languages;
use app\modules\menu\models\Menus;
use app\modules\menu\models\MenuItems;

/* @var $this yii\web\View */
/* @var $model \app\modules\menu\models\MenuItemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-form row">
    <div class="col-lg-7">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'menu_id')->dropDownList(Menus::getDropdownList(),
            ['prompt' => 'Выберите меню']) ?>

        <?= $form->field($model, 'parent_id')->dropDownList(MenuItems::getTreeDropdownList(true)) ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

        <?= $form->field($model, 'link')->textInput(['maxlength' => 255]) ?>

        <?= $form->field($model, 'is_new_window')->checkbox() ?>

        <?= $form->field($model, 'is_active')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('menu', 'Создать') : Yii::t('menu',
                'Сохранить'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
