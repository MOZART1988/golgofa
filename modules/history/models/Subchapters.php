<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 11.04.19
 * Time: 12:21
 */

namespace app\modules\history\models;

use mtemplate\mclasses\LanguageActiveRecord;
use Yii;
use app\modules\languages\models\Languages;
use mtemplate\mclasses\ActiveRecord;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "sub_schapters".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property integer $chapter_id
 * @property string $title
 * @property string $sub_title
 * @property string $text
 * @property integer $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $slug
 *
 * @property Languages $language
 * @property Chapters $chapter
 *
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 *
 * @property Subchapters $next || null
 * @property Subchapters $prev || null
 */
class Subchapters extends LanguageActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_chapters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'chapter_id', 'lang_id'], 'required'],
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
            'slug' => Yii::t('admin', 'ЧПУ'),
            'chapter_id' => Yii::t('admin', 'Глава')
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
        $query = new SubchaptersQuery(get_called_class());

        return $query->setLanguage();
    }

    public function getNext() {
        return self::find()->where(['>', 'id', $this->id])->andWhere(['chapter_id' => $this->chapter_id])->one();
    }

    public function getPrev() {
        return self::find()->where(['<', 'id', $this->id])->andWhere(['chapter_id' => $this->chapter_id])->orderBy('id desc')->one();
    }

    public function getChapter()
    {
        return $this->hasOne(Chapters::class, ['id' => 'chapter_id']);
    }
}