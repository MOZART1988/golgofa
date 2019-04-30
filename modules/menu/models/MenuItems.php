<?php

namespace app\modules\menu\models;

use app\components\CustomNestedSetsBehaviour;
use mtemplate\mclasses\LanguageActiveRecord;
use mtemplate\traits\NestedSetTree;
use app\modules\languages\models\Languages;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;


/**
 * This is the model class for table "menu_items".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property integer $lang_id
 * @property string $title
 * @property string $link
 * @property integer $is_new_window
 * @property integer $is_active
 * @property string $create_date
 * @property string $update_date
 *
 * @property Languages $lang
 * @property Menus $menu
 *
 */
class MenuItems extends LanguageActiveRecord
{
    use NestedSetTree;

    public static function find()
    {
        $query = new MenuItemsQuery(get_called_class());

        if (Yii::$app->params['yiiEnd'] === 'admin') {
            return $query->setLanguage();
        }

        return $query;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'lang_id', 'title', 'link'], 'required'],
            [['parent_id', 'menu_id', 'lang_id', 'is_new_window', 'is_active'], 'integer'],
            [['title', 'link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('menu', 'ID'),
            'menu_id' => Yii::t('menu', 'Меню'),
            'lang_id' => Yii::t('menu', 'Язык'),
            'parent_id' => Yii::t('menu', 'Родитель'),
            'title' => Yii::t('menu', 'Наименование'),
            'link' => Yii::t('menu', 'Ссылка'),
            'is_new_window' => Yii::t('menu', 'Открывать в новом окне'),
            'is_active' => Yii::t('menu', 'Активность'),
            'create_date' => Yii::t('menu', 'Дата создания'),
            'update_date' => Yii::t('menu', 'Дата изменения'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Languages::class, ['id' => 'lang_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menus::class, ['id' => 'menu_id']);
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['create_date', 'update_date'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['update_date']
                ],
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => CustomNestedSetsBehaviour::class,
                'depthAttribute' => 'level',
                'treeAttribute' => 'root'
            ],
        ];
    }

}
