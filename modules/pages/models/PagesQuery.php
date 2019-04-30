<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 03.04.19
 * Time: 12:24
 */

namespace app\modules\pages\models;


use app\modules\languages\models\Languages;
use yii\db\ActiveQuery;

class PagesQuery extends ActiveQuery
{
    public function active()
    {
        $this->andWhere(['pages.is_active' => 1]);

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
            $this->andWhere(['pages.lang_id' => Languages::getAdminCurrent()->id]);
        } else {
            $this->andWhere(['pages.lang_id' => Languages::getCurrent()->id]);
        }

        return $this;
    }
}