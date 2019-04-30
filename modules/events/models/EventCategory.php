<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 02.04.19
 * Time: 16:06
 */

namespace app\modules\events\models;


use mtemplate\mclasses\ActiveRecord;

/**
 * This is the model class for table "events_categories".
 *
 * @property integer $event_id
 * @property integer $category_id
 */
class EventCategory extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'category_id'], 'integer'],
            [['event_id', 'category_id'], 'required']
        ];
    }
}