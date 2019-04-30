<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 02.04.19
 * Time: 15:14
 */

namespace app\modules\events\models;


use app\modules\languages\models\Languages;
use yii\db\ActiveQuery;

class EventQuery extends ActiveQuery
{
    public function active()
    {
        $this->andWhere(['events.is_active' => 1]);

        return $this;
    }
    public function orderDate()
    {
        $this->addOrderBy(['created_at' => SORT_DESC]);

        return $this;
    }

    public function setLanguage()
    {
        if (\Yii::$app->params['yiiEnd'] === 'admin') {
            $this->andWhere(['events.lang_id' => Languages::getAdminCurrent()->id]);
        } else {
            $this->andWhere(['events.lang_id' => Languages::getCurrent()->id]);
        }

        return $this;
    }
}