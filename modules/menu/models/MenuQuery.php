<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 14.04.2019
 * Time: 16:36
 */

namespace app\modules\menu\models;


use app\modules\languages\models\Languages;
use yii\db\ActiveQuery;

class MenuQuery extends ActiveQuery
{
    public function active()
    {
        $this->andWhere(['menus.is_active' => 1]);

        return $this;
    }
    public function orderDate()
    {
        $this->addOrderBy(['menus.created_at' => SORT_DESC]);

        return $this;
    }

    public function setLanguage()
    {
        if (\Yii::$app->params['yiiEnd'] === 'admin') {
            $this->andWhere(['menus.lang_id' => Languages::getAdminCurrent()->id]);
        } else {
            $this->andWhere(['menus.lang_id' => Languages::getCurrent()->id]);
        }

        return $this;
    }
}