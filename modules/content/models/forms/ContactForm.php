<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 14.04.2019
 * Time: 17:58
 */

namespace app\modules\content\models\forms;

use app\modules\custom_variables\models\CustomVariables;
use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $message;


    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'message'], 'required'],
            [['name', 'phone', 'message'], 'string'],
            [['email'], 'email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => Yii::t('front', 'Ваше имя'),
            'email' => Yii::t('front', 'Электронная почта'),
            'phone' => Yii::t('front', 'Номер телефона'),
            'message' => Yii::t('front', 'Ваше сообщение'),
        ];
    }

    public function send()
    {
        $setTo = CustomVariables::getOrCreate('admin_email', 'wfwdave@gmail.com');

        if (strpos($setTo, ',') !== false) {
            $setTo = explode(',', $setTo);
        }

        return Yii::$app->mailer->compose()
            ->setFrom('website@mygoal.kz')
            ->setTo($setTo)
            ->setSubject('Новый запрос на сайте')
            ->setHtmlBody('
            <p>Имя - '. $this->name .'</p>
            <p>Телефон - '.$this->phone.'</p>
            <p>Email - '.$this->email.'</p>
            <p>Сообщение - '.$this->message.'</p>')
            ->send();
    }
}