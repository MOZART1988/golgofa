<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 03.04.19
 * Time: 16:14
 */

namespace app\components\widgets;


use app\modules\events\models\Event;
use yii\base\Widget;

class MainpageEventsWidget extends Widget
{
    public function run()
    {
        parent::run();

        $items = Event::find()->active()->orderBy(['created_at' => SORT_DESC])->limit(6)->all();

        if (!$items) {
            return false;
        }

        $count = Event::find()->active()->count();

        return $this->render('mainpageEventsWidget', ['count' => $count, 'items' => $items]);

    }
}