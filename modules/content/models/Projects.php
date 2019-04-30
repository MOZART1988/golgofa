<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15.04.19
 * Time: 11:14
 */

namespace app\modules\content\models;

use Yii;
use app\modules\languages\models\Languages;
use mtemplate\mclasses\LanguageActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $title
 * @property string $text
 * @property integer $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $image
 * @property string $link
 * @property integer $is_new_page
 *
 * @property Languages $language
 */
class Projects extends LanguageActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['is_active', 'is_new_page'], 'integer'],
            [['title', 'text', 'link'], 'string', 'max' => 255],
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
            'is_active' => Yii::t('admin', 'Активность'),
            'text' => Yii::t('admin', 'Текст'),
            'lang_id' => Yii::t('admin', 'Язык'),
            'created_at' => Yii::t('admin', 'Дата создания'),
            'updated_at' => Yii::t('admin', 'Дата обновления'),
            'image' => Yii::t('admin', 'Изображение'),
            'link' => Yii::t('admin', 'Ссылка'),
            'is_new_page' => Yii::t('admin', 'Открывать в новом окне')
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
                'class' => \mohorev\file\UploadImageBehavior::class,
                'attribute' => 'image',
                'scenarios' => ['insert', 'update'],
                'path' => '@webroot/media/projects/{id}',
                'url' => '@web/media/projects/{id}',
                'thumbs' => [
                    'list' => ['width' => 370, 'height' => 320, 'quality' => 100],
                ],
            ],
        ];
    }

    public static function find()
    {
        $query = new ProjectsQuery(get_called_class());

        return $query->setLanguage();
    }

    public function getLanguage()
    {
        return $this->hasOne(Languages::tableName(), ['id' => 'lang_id']);
    }
}