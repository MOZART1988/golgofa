<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 11.04.19
 * Time: 9:45
 */

namespace app\modules\basepage\admin\controllers;

use Yii;
use app\modules\basepage\models\Pastor;
use mtemplate\mcontrollers\MBTAController;

class PastorController extends MBTAController
{
    public function actionIndex()
    {
        $model = Pastor::find()->one();

        if ($model === null) {
            $model = new Pastor();
            $model->setScenario('insert');
        } else {
            $model->setScenario('update');
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(\Yii::$app->request->referrer);
        }

        return $this->render('index', ['model' => $model]);
    }
}