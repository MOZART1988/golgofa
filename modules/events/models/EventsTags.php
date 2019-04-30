<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 02.04.2019
 * Time: 23:19
 */

namespace app\modules\events\models;


use mtemplate\mclasses\ActiveRecord;

/**
 * This is the model class for table "events_tags".
 *
 * @property integer $event_id
 * @property integer $tag_id
 */
class EventsTags extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'tag_id'], 'integer'],
            [['event_id', 'tag_id'], 'required']
        ];
    }
}