<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 07.04.2019
 * Time: 18:04
 */

namespace app\components\widgets;


use app\modules\languages\models\Languages;
use app\modules\menu\models\MenuItems;
use app\modules\menu\models\Menus;
use yii\base\Widget;
use yii\web\NotFoundHttpException;

class MenuWidget extends Widget
{

    public function run()
    {
        parent::run();

        $menu = Menus::find()->one();


        if ($menu === null) {
            return false;
        }

        $menuItems = MenuItems::find()->where([
            'is_active' => 1,
            'parent_id' => 0,
            'menu_id' => $menu->id,
            'lang_id' => Languages::getCurrent()->id,
        ])->all();

        if (!$menuItems) {
            return false;
        }

        return $this->render('menuWidget', ['menuItems' => $menuItems]);
    }
}