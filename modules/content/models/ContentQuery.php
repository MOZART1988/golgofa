<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 01.04.2019
 * Time: 22:50
 */

namespace app\modules\content\models;


use app\modules\languages\models\Languages;
use yii\db\ActiveQuery;

class ContentQuery extends ActiveQuery
{
    public function active()
    {
        $this->andWhere(['content.is_active' => 1]);

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
            $this->andWhere(['content.lang_id' => Languages::getAdminCurrent()->id]);
        } else {
            $this->andWhere(['content.lang_id' => Languages::getCurrent()->id]);
        }

        return $this;
    }
}