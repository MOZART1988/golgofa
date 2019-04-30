<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15.04.19
 * Time: 13:49
 */

namespace app\modules\content\models;

use app\modules\languages\models\Languages;
use Yii;
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
 * @property string $lattitude
 * @property string $longtitude
 * @property string $address
 * @property string $email
 * @property string $phone
 *
 * @property string $meta_title
 * @property string $meta_descripion
 * @property string $meta_keywords
 *
 * @property Languages $language
 */
class Contacts extends LanguageActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address', 'phone', 'email'], 'required'],
            [['address', 'phone', 'lattitude', 'longtitude'], 'string'],
            [['email'], 'required'],
            [['is_active'], 'integer'],
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
            'is_active' => Yii::t('admin', 'Активность'),
            'lang_id' => Yii::t('admin', 'Язык'),
            'created_at' => Yii::t('admin', 'Дата создания'),
            'updated_at' => Yii::t('admin', 'Дата обновления'),
            'address' => Yii::t('admin', 'Адрес'),
            'phone' => Yii::t('admin', 'Телефон'),
            'email' => Yii::t('admin', 'Email'),
            'lattitude' => Yii::t('admin', 'Широта'),
            'longtitude' => Yii::t('admin', 'Долгота')
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
        $query = new ContactsQuery(get_called_class());

        return $query->setLanguage();
    }

    public function getLanguage()
    {
        return $this->hasOne(Languages::tableName(), ['id' => 'lang_id']);
    }
}