<?php
/**
 * @var \app\modules\content\models\Content $model
*/
?>
<?php if($model->template_type === \app\modules\content\models\Content::TEMPLATE_DEFAULT) : ?>
    <div class="title-block " style="background-image: url(<?=$model->getUploadUrl('image')?>)">
        <div class="container">
            <h1><?=$model->title?></h1>
        </div>
    </div>
    <?=$model->getFormattedText()?>
<?php else: ?>
    <div class="custom-contacts-content">
        <?=$model->getFormattedText()?>
    </div>

    <?php
        $model = new \app\modules\content\models\forms\ContactForm();
    ?>

    <div class="modal-contacts" id="modal-contacts">
        <div class="modal-dialog">
            <a href="" class="modal-close"></a>
            <h3 class="modal-title"><?=\Yii::t('front', 'Написать Нам')?></h3>
            <div class="modal-form">
                <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'contact-form'])?>
                <?=$form->field($model, 'name', ['template' => '{input}{label}', 'options' => ['class' => 'form-block']])->textInput(['required' => 'required'])?>
                <?=$form->field($model, 'email', ['template' => '{input}{label}', 'options' => ['class' => 'form-block']])->textInput(['required' => 'required', 'type' => 'email'])?>
                <?=$form->field($model, 'phone', ['template' => '{input}{label}', 'options' => ['class' => 'form-block']])->textInput(['required' => 'required'])?>
                <?=$form->field($model, 'message', ['template' => '{input}{label}', 'options' => ['class' => 'form-block']])->textarea(['required' => 'required'])?>
                    <div class="form-block">
                        <button type="submit" class="btn"><?=\Yii::t('front', 'Отправить')?></button>
                    </div>
                <?php \yii\widgets\ActiveForm::end(); ?>
            </div>
        </div>
    </div>
    <div class="modal-contacts" id="modal-success">
        <div class="modal-dialog">
            <a href="" class="modal-close" data-modal-close></a>
            <h3 class="modal-title"><?=\Yii::t('front', 'Написать нам')?></h3>
            <div class="modal-success">
                <img src="/images/icons/icon-success.png" alt="">
                <h3><?=\Yii::t('front', 'Сообщение успешно отправлено!')?></h3>
                <p><?=\Yii::t('front', 'Мы свяжемся с вами ближайшее время')?></p>
            </div>
            <div class="modal-form">
                <div class="form-block">
                    <button type="button" class="btn" data-modal-close><?=\Yii::t('front', 'Закрыть')?></button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

