<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 03.04.19
 * Time: 12:24
 */

namespace app\modules\pages\models;

use app\modules\languages\models\Languages;
use mtemplate\mclasses\LanguageActiveRecord;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $title
 * @property string $text
 * @property integer $is_active
 * @property integer $add_to_mainpage
 * @property string $created_at
 * @property string $updated_at
 * @property string $slug
 * @property string $image
 *
 * @property array $listCategories
 * @property array $listTags
 *
 * @property Languages $language
 *
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords

 */
class Pages extends LanguageActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['is_active', 'add_to_mainpage'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['slug', 'text', 'meta_title', 'meta_description', 'meta_keywords'], 'string'],
            ['image', 'image', 'extensions' => 'jpg, jpeg, gif, png', 'on' => ['insert', 'update']],
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
            'text' => Yii::t('admin', 'Текст'),
            'is_active' => Yii::t('admin', 'Активность'),
            'lang_id' => Yii::t('admin', 'Язык'),
            'created_at' => Yii::t('admin', 'Дата создания'),
            'updated_at' => Yii::t('admin', 'Дата обновления'),
            'slug' => Yii::t('admin', 'ЧПУ'),
            'image' => Yii::t('admin', 'Картинка'),
            'add_to_mainpage' => Yii::t('admin', 'Добавить на главную')
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
                'path' => '@webroot/media/pages/{id}',
                'url' => '@web/media/pages/{id}',
                'thumbs' => [
                    'list' => ['width' => 370, 'height' => 320, 'quality' => 100],
                ],
            ],
        ];
    }

    public static function find()
    {
        $query = new PagesQuery(get_called_class());

        return $query->setLanguage();
    }

    public function getLanguage()
    {
        return $this->hasOne(Languages::class, ['id' => 'lang_id']);
    }
}