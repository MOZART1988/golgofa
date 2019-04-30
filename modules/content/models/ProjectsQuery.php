<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15.04.19
 * Time: 11:14
 */

namespace app\modules\content\models;


use app\modules\languages\models\Languages;
use yii\db\ActiveQuery;

class ProjectsQuery extends ActiveQuery
{
    public function active()
    {
        $this->andWhere(['projects.is_active' => 1]);

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
            $this->andWhere(['projects.lang_id' => Languages::getAdminCurrent()->id]);
        } else {
            $this->andWhere(['projects.lang_id' => Languages::getCurrent()->id]);
        }

        return $this;
    }
}