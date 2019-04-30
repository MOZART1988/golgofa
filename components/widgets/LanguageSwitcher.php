<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 07.04.2019
 * Time: 17:42
 */

namespace app\components\widgets;


use app\modules\languages\models\Languages;
use yii\base\Widget;

class LanguageSwitcher extends Widget
{
    public function run()
    {
        $languages = Languages::find()->where(['is_active' => 1])->all();

        if (!$languages) {
            return false;
        }

        //TODO Расскоментировать потом

        return false;

        return $this->render('languageSwitcher', ['languages' => $languages]);
    }
}