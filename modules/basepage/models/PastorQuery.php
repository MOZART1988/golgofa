<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 11.04.19
 * Time: 9:37
 */

namespace app\modules\basepage\models;

use app\modules\languages\models\Languages;
use yii\db\ActiveQuery;

class PastorQuery extends ActiveQuery
{
    public function active()
    {
        $this->andWhere(['pastor.is_active' => 1]);

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
            $this->andWhere(['pastor.lang_id' => Languages::getAdminCurrent()->id]);
        } else {
            $this->andWhere(['pastor.lang_id' => Languages::getCurrent()->id]);
        }

        return $this;
    }
}