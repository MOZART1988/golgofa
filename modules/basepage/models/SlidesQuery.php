<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 14.04.2019
 * Time: 23:48
 */

namespace app\modules\basepage\models;


use app\modules\languages\models\Languages;
use yii\db\ActiveQuery;

class SlidesQuery extends ActiveQuery
{
    public function active()
    {
        $this->andWhere(['slides.is_active' => 1]);

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
            $this->andWhere(['slides.lang_id' => Languages::getAdminCurrent()->id]);
        } else {
            $this->andWhere(['slides.lang_id' => Languages::getCurrent()->id]);
        }

        return $this;
    }
}