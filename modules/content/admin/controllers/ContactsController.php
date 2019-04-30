<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15.04.19
 * Time: 13:56
 */

namespace app\modules\content\admin\controllers;

use Yii;
use app\modules\content\models\Contacts;
use mtemplate\mcontrollers\MBTAController;

class ContactsController extends MBTAController
{
    public function actionIndex()
    {
        $model = Contacts::find()->one();

        if ($model === null) {
            $model = new Contacts();
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(\Yii::$app->request->referrer);
        }

        return $this->render('index', ['model' => $model]);
    }
}