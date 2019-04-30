<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 02.04.2019
 * Time: 23:17
 */

namespace app\modules\events\models;


use mtemplate\mclasses\ActiveRecord;

/**
 * This is the model class for table "tags".
 *
 * @property integer $id
 * @property integer $frequency
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 *
 */
class Tag extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['frequency'], 'integer']
        ];
    }
}