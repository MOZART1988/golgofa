<?php
/**
 * @var app\modules\menu\models\Menus $menu
 */

echo \app\modules\menu\front\components\RFMenu::widget([
    'items' => $menu->getItems(),
    'options' => ['class' => $cssClass],
    'linkTemplate' => '<a href="{url}" rel="nofollow">{label}</a>',
    'route' => Yii::$app->controller->routeUrl,
    'id' => 'menu-glavnoe-menyu',
    'replaceLinkTemplate' => false
]);
