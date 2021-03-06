<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 04.04.19
 * Time: 11:54
 */

namespace app\modules\gallery\models;


use app\modules\languages\models\Languages;
use yii\db\ActiveQuery;

class GalleryQuery extends ActiveQuery
{
    public function active()
    {
        $this->andWhere(['gallery.is_active' => 1]);

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
            $this->andWhere(['gallery.lang_id' => Languages::getAdminCurrent()->id]);
        } else {
            $this->andWhere(['gallery.lang_id' => Languages::getCurrent()->id]);
        }

        return $this;
    }
}