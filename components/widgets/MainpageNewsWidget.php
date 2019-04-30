<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 03.04.19
 * Time: 16:56
 */

namespace app\components\widgets;


use app\modules\pages\models\Pages;
use yii\base\Widget;

class MainpageNewsWidget extends Widget
{
    public function run()
    {
        parent::run();

        $pages = Pages::find()->active()->where(['add_to_mainpage' => 1])->orderDate()->all();

        if (!$pages) {
            return false;
        }

        return false;

        return $this->render('mainpageNewsWidget', ['pages' => $pages]);
    }
}