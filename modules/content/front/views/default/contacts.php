<?php
/**
 * @var \app\modules\content\models\Contacts $model
 * @var array $scedules
 */
?>

<main class="page page-contacts">
    <div class="contacts-map" data-coordinates="<?=$model->lattitude ? $model->lattitude : 43.25538966121985?>,<?=$model->longtitude ? $model->longtitude : 76.86828820186803?>">
        <div id="map"></div>
    </div>
    <div class="container">
        <div class="page-content contacts-content">
            <figure class="contacts-block"><img src="/images/icons/icon-address.png" alt="">
                <figcaption>
                    <h4><?=\Yii::t('front', 'Наш адрес:')?></h4>
                    <p><?=$model->address?></p>
                </figcaption>
            </figure>
            <figure class="contacts-block"><img src="/images/icons/icon-contacts.png" alt="">
                <figcaption>
                    <h4><?=\Yii::t('front', 'Наши контакты для связи:')?></h4>
                    <ul class="clearlist">
                        <li><img src="/images/icons/icon-phone.png" alt=""><?=$model->phone?></li>
                        <li><img src="/images/icons/icon-mail.png" alt=""><?=$model->email?></li>
                    </ul>
                    <a href="" class="btn btn--mail" data-modal="#modal-contacts"><?=\Yii::t('front', 'Написать нам')?></a>
                </figcaption>
            </figure>
            <hr class="contacts-divider" />
            <figure class="contacts-block"><img src="/images/icons/icon-shedule.png" alt="">
                <figcaption>
                    <?php if (!empty($scedules)) : ?>
                    <h4><?=\Yii::t('front', 'Расписание Богослужений:')?></h4>
                    <div class="contacts-shedule">
                        <?php foreach ($scedules as $day => $models) : ?>
                            <div class="tr">
                                <div class="th"><?=\app\modules\content\models\Scedules::$days[$day]?></div>
                                <?php foreach ($models as $item) : ?>
                                    <?php
                                    /**
                                     * @var \app\modules\content\models\Scedules $item
                                     */
                                    ?>
                                    <div class="td">
                                        <?=$item->title?>
                                        <time><?=$item->time?></time>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </figcaption>
            </figure>
        </div>
    </div>
</main>

<?php
$formModel = new \app\modules\content\models\forms\ContactForm();
?>

<div class="modal-contacts" id="modal-contacts">
    <div class="modal-dialog">
        <a href="" class="modal-close"></a>
        <h3 class="modal-title"><?=\Yii::t('front', 'Написать Нам')?></h3>
        <div class="modal-form">
            <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'contact-form'])?>
            <?=$form->field($formModel, 'name', ['template' => '{input}{label}', 'options' => ['class' => 'form-block']])->textInput(['required' => 'required'])?>
            <?=$form->field($formModel, 'email', ['template' => '{input}{label}', 'options' => ['class' => 'form-block']])->textInput(['required' => 'required', 'type' => 'email'])?>
            <?=$form->field($formModel, 'phone', ['template' => '{input}{label}', 'options' => ['class' => 'form-block']])->textInput(['required' => 'required'])?>
            <?=$form->field($formModel, 'message', ['template' => '{input}{label}', 'options' => ['class' => 'form-block']])->textarea(['required' => 'required'])?>
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

