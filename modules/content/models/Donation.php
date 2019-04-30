<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15.04.19
 * Time: 15:28
 */

namespace app\modules\content\models;

use app\modules\languages\models\Languages;
use mtemplate\mclasses\LanguageActiveRecord;
use Yii;
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
 * @property string $title
 * @property string $text
 * @property string $image
 * @property string $requisites
 *
 * @property string $meta_title
 * @property string $meta_descripion
 * @property string $meta_keywords
 *
 * @property Languages $language
 */
class Donation extends LanguageActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'lang_id'], 'required'],
            [['is_active'], 'integer'],
            [['title', 'text'], 'string', 'max' => 255],
            [['requisites'], 'string'],
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
            'title' => Yii::t('admin', 'Заголовок'),
            'is_active' => Yii::t('admin', 'Активность'),
            'text' => Yii::t('admin', 'Текст'),
            'lang_id' => Yii::t('admin', 'Язык'),
            'created_at' => Yii::t('admin', 'Дата создания'),
            'updated_at' => Yii::t('admin', 'Дата обновления'),
            'image' => Yii::t('admin', 'Изображение'),
            'requisites' => Yii::t('admin', 'Реквизиты')
        ];
    }

    public function behaviors()
    {
        return [
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
        $query = new DonationQuery(get_called_class());

        return $query->setLanguage();
    }

    public function getLanguage()
    {
        return $this->hasOne(Languages::tableName(), ['id' => 'lang_id']);
    }
}