<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15.04.19
 * Time: 14:28
 */

namespace app\modules\content\models;

use Yii;
use app\modules\languages\models\Languages;
use mtemplate\mclasses\LanguageActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property integer $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $time
 * @property string $title
 * @property integer $week_day
 *
 * @property Languages $language
 */
class Scedules extends LanguageActiveRecord
{

    const DAY_SUNDAY = 1;
    const DAY_MONDAY = 2;
    const DAY_TUESDAY = 3;
    const DAY_WEDNESDAY = 4;
    const DAY_THURSDAY = 5;
    const DAY_FRIDAY = 6;
    const DAY_SATURDAY = 7;

    public static $days = [
        self::DAY_SUNDAY => 'Воскресенье',
        self::DAY_MONDAY => 'Понедельник',
        self::DAY_TUESDAY => 'Вторник',
        self::DAY_WEDNESDAY => 'Среда',
        self::DAY_THURSDAY => 'Четверг',
        self::DAY_FRIDAY => 'Пятница',
        self::DAY_SATURDAY => 'Суббота'
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scedules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'time', 'week_day', 'lang_id'], 'required'],
            [['is_active', 'week_day'], 'integer'],
            [['title', 'time'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('admin', 'ID'),
            'title' => Yii::t('admin', 'Название'),
            'is_active' => Yii::t('admin', 'Активность'),
            'lang_id' => Yii::t('admin', 'Язык'),
            'created_at' => Yii::t('admin', 'Дата создания'),
            'updated_at' => Yii::t('admin', 'Дата обновления'),
            'week_day' => Yii::t('admin', 'День недели'),
            'time' => Yii::t('admin', 'Время')
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at']
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public static function find()
    {
        $query = new ScedulesQuery(get_called_class());

        return $query->setLanguage();
    }

    public function getLanguage()
    {
        return $this->hasOne(Languages::tableName(), ['id' => 'lang_id']);
    }
}