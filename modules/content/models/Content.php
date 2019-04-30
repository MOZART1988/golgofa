<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 01.04.2019
 * Time: 22:45
 */

namespace app\modules\content\models;


use app\modules\gallery\models\Gallery;
use app\modules\languages\models\Languages;
use mtemplate\mclasses\ActiveRecord;
use mtemplate\mclasses\LanguageActiveRecord;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $title
 * @property string $text
 * @property integer $is_active
 * @property integer $template_type
 * @property string $created_at
 * @property string $updated_at
 * @property string $slug
 * @property string $image
 *
 * @property string $meta_title
 * @property string $meta_descripion
 * @property string $meta_keywords
 *
 * @property Languages $language
 */
class Content extends LanguageActiveRecord
{
    const TEMPLATE_DEFAULT = 1;
    const TEMPLATE_CONTACTS = 2;

    public static $types = [
        self::TEMPLATE_DEFAULT => 'Обычный шаблон',
        self::TEMPLATE_CONTACTS => 'Страница контактов'
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['slug'], 'required'],
            [['is_active', 'template_type'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['text'], 'string'],
            ['image', 'image', 'extensions' => 'jpg, jpeg, gif, png', 'on' => ['insert', 'update']],
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
            'title' => Yii::t('admin', 'Название'),
            'is_active' => Yii::t('admin', 'Активность'),
            'text' => Yii::t('admin', 'Текст'),
            'lang_id' => Yii::t('admin', 'Язык'),
            'created_at' => Yii::t('admin', 'Дата создания'),
            'updated_at' => Yii::t('admin', 'Дата обновления'),
            'slug' => Yii::t('admin', 'ЧПУ'),
            'image' => Yii::t('admin', 'Изображение'),
            'template_type' => Yii::t('admin', 'Шаблон'),
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
            ],
            [
                'class' => \mohorev\file\UploadImageBehavior::class,
                'attribute' => 'image',
                'scenarios' => ['insert', 'update'],
                'path' => '@webroot/media/content/{id}',
                'url' => '@web/media/content/{id}',
                'thumbs' => [
                    'list' => ['width' => 370, 'height' => 320, 'quality' => 100],
                ],
            ],
        ];
    }

    public static function find()
    {
        $query = new ContentQuery(get_called_class());

        return $query->setLanguage();
    }

    public function getLanguage()
    {
        return $this->hasOne(Languages::tableName(), ['id' => 'lang_id']);
    }
}