<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 11.04.19
 * Time: 12:15
 */

namespace app\modules\history\models;

use Yii;
use app\modules\languages\models\Languages;
use mtemplate\mclasses\LanguageActiveRecord;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "chapters".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $title
 * @property string $sub_title
 * @property string $text
 * @property integer $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $slug
 *
 * @property Languages $language
 * @property Subchapters[] $subchapters
 *
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 */
class Chapters extends LanguageActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chapters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug'], 'required'],
            [['is_active'], 'integer'],
            [['title', 'sub_title'], 'string', 'max' => 255],
            [['slug', 'text'], 'string'],
            [['meta_title', 'meta_description', 'meta_keywords'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('admin', 'ID'),
            'title' => Yii::t('admin', 'Заголовок'),
            'sub_title' => Yii::t('admin', 'Подзаголовок'),
            'is_active' => Yii::t('admin', 'Активность'),
            'lang_id' => Yii::t('admin', 'Язык'),
            'created_at' => Yii::t('admin', 'Дата создания'),
            'updated_at' => Yii::t('admin', 'Дата обновления'),
            'slug' => Yii::t('admin', 'ЧПУ')
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
            [
                'class' => SluggableBehavior::class,
                'attribute' => 'title'
            ]
        ];
    }

    public function getLanguage()
    {
        return $this->hasOne(Languages::tableName(), ['id' => 'lang_id']);
    }

    public static function find()
    {
        $query = new ChaptersQuery(get_called_class());

        return $query->setLanguage();
    }

    public function getSubchapters()
    {
        return $this->hasMany(Subchapters::class, ['chapter_id' => 'id']);
    }
}