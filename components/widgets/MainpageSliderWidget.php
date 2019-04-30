<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 03.04.19
 * Time: 15:53
 */

namespace app\components\widgets;


use app\modules\basepage\models\Slides;
use yii\base\Widget;

class MainpageSliderWidget extends Widget
{
    public function run()
    {
        parent::run();

        $items = Slides::find()->active()->orderBy(['position' => SORT_ASC])->all();

        if (!$items) {
            return false;
        }

        return $this->render('mainpageSliderWidget', ['items' => $items]);
    }
}