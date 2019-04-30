<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 02.04.19
 * Time: 15:14
 */

namespace app\modules\events\models;

use app\modules\languages\models\Languages;
use dosamigos\taggable\Taggable;
use mtemplate\mclasses\LanguageActiveRecord;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $title
 * @property string $text
 * @property integer $is_active
 * @property integer $add_to_mainpage
 * @property integer $type
 * @property string $created_at
 * @property string $updated_at
 * @property string $slug
 * @property string $youtube
 * @property string $short_text
 * @property string $image
 * @property string $meta
 * @property string $pub_date
 *
 * @property array $listCategories
 * @property array $listTags
 *
 * @property Languages $language
 * @property Category[] $categories
 * @property Category[] $eventCategories
 * @property Category $category
 * @property Tag[] $tags
 *
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 *
 */
class Event extends LanguageActiveRecord
{
    const TYPE_TEXT = 1;
    const TYPE_PHOTOGALLERY = 2;
    const TYPE_VIDEO = 3;

    public static $types = [
        self::TYPE_TEXT => 'Статья',
        self::TYPE_PHOTOGALLERY => 'Фотогалерея',
        self::TYPE_VIDEO => 'Видео'
    ];

    public static $typesClasses = [
        self::TYPE_TEXT => 'text',
        self::TYPE_PHOTOGALLERY => 'photo',
        self::TYPE_VIDEO => 'video'
    ];

    public $listCategories;
    public $listTags;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['is_active', 'type', 'add_to_mainpage'], 'integer'],
            [['title', 'short_text', 'meta'], 'string', 'max' => 255],
            [['slug', 'text', 'youtube', 'meta_title', 'meta_description', 'meta_keywords', 'pub_date'], 'string'],
            [['listCategories', 'listTags', 'category_id'], 'safe'],
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
            'type' => Yii::t('admin', 'Тип'),
            'youtube' => Yii::t('admin', 'Ютуб видео'),
            'image' => Yii::t('admin', 'Картинка'),
            'add_to_mainpage' => Yii::t('admin', 'Добавить событие на слайдер'),
            'short_text' => Yii::t('admin', 'Короткое описание'),
            'listTags' => Yii::t('admin', 'Тэги'),
            'listCategories' => Yii::t('admin', 'Рубрики'),
            'meta' => Yii::t('admin', 'Мета информация'),
            'pub_date' => Yii::t('admin', 'Дата публикации')

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
                'path' => '@webroot/media/events/{id}',
                'url' => '@web/media/events/{id}',
                'thumbs' => [
                    'list' => ['width' => 370, 'height' => 320, 'quality' => 100],
                ],
            ],
            [
                'class' => Taggable::class,
                'attribute' => 'listTags'
            ],
        ];
    }

    public static function find()
    {
        $query = new EventQuery(get_called_class());

        return $query->setLanguage();
    }


    public function afterFind()
    {
        $this->listCategories = ArrayHelper::map($this->categories, 'id', 'id');
        $this->listTags = implode(',' , ArrayHelper::map($this->tags, 'name', 'name'));

        parent::afterFind();
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $categoryIds = [];

        if (!empty($this->listCategories)) {

            foreach ($this->listCategories as $key => $value) {

                $exitingModel = EventCategory::find()->where([
                    'category_id' => $value,
                    'event_id' => $this->id
                ])->one();

                if ($exitingModel === null) {
                    $exitingModel = new EventCategory();
                    $exitingModel->event_id = $this->id;
                }

                if ($exitingModel !== null) {
                    $exitingModel->category_id = $value;
                    $exitingModel->save();
                    $categoryIds[] = $exitingModel->category_id;
                }
            }
        }

        EventCategory::deleteAll([
            'and',
            ['not in', 'category_id', $categoryIds],
            ['event_id' => $this->id]
        ]);
    }

    public function getLanguage()
    {
        return $this->hasOne(Languages::class, ['id' => 'lang_id']);
    }

    public function getCategories()
    {
        return $this->hasMany(Category::class, ['id' => 'category_id'])
            ->viaTable('events_categories', ['event_id' => 'id']);
    }

    public function getEventCategories()
    {
        return $this->hasMany(EventCategory::class, ['event_id' => 'id']);
    }

    public function getTags()
    {
        return $this->hasMany(Tag::class, ['id' => 'tag_id'])
            ->viaTable('events_tags', ['event_id' => 'id']);
    }

    public function getHtmlTags()
    {
        $tags = $this->hasMany(Tag::class, ['id' => 'tag_id'])
            ->viaTable('events_tags', ['event_id' => 'id'])->limit(2)->all();

        if (!$tags) {
            return null;
        }

        $result = [];

        foreach ($tags as $item) {
            $result[] = "<span class='life-item-tag'>{$item->name}</span>";
        }

        return implode(' ', $result);

    }

    public function getHtmlCategories()
    {
        $result = [];

        foreach ($this->categories as $item) {
            $result[] = "<span class='life-item-tag'>{$item->title}</span>";
        }

        return implode(' ', $result);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id'])
            ->viaTable('events_categories', ['event_id' => 'id']);
    }
}