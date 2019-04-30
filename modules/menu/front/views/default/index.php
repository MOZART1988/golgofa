<?php

echo \app\modules\menu\front\components\RFMenu::widget([
    'items' => $menu->getItems(true),
]);
