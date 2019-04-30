<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 11.04.19
 * Time: 9:37
 */

namespace app\modules\basepage\models;

use Yii;
use app\modules\languages\models\Languages;
use mtemplate\mclasses\LanguageActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "pastor".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $title
 * @property string $text
 * @property integer $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property string $rang
 * @property string $image
 *
 * @property Languages $language
 */
class Pastor extends LanguageActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pastor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'name', 'text', 'rang', 'lang_id'], 'required'],
            [['text'], 'string'],
            [['is_active'], 'integer'],
            [['title', 'name', 'rang'], 'string', 'max' => 255],
            [['text'], 'string'],
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
            'title' => Yii::t('admin', 'Заголовок'),
            'name' => Yii::t('admin', 'Имя'),
            'rang' => Yii::t('admin', 'Чин'),
            'is_active' => Yii::t('admin', 'Активность'),
            'text' => Yii::t('admin', 'Текст'),
            'lang_id' => Yii::t('admin', 'Язык'),
            'created_at' => Yii::t('admin', 'Дата создания'),
            'updated_at' => Yii::t('admin', 'Дата обновления'),
            'image' => Yii::t('admin', 'Изображение'),
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
                'path' => '@webroot/media/pastor/{id}',
                'url' => '@web/media/pastor/{id}',
                'thumbs' => [
                    'list' => ['width' => 370, 'height' => 320, 'quality' => 100],
                ],
            ],
        ];
    }

    public static function find()
    {
        $query = new PastorQuery(get_called_class());

        return $query->setLanguage();
    }

    public function getLanguage()
    {
        return $this->hasOne(Languages::tableName(), ['id' => 'lang_id']);
    }
}