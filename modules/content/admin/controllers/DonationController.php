<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15.04.19
 * Time: 15:37
 */

namespace app\modules\content\admin\controllers;

use Yii;
use app\modules\content\models\Donation;
use mtemplate\mcontrollers\MBTAController;

class DonationController extends MBTAController
{
    public function actionIndex()
    {
        $model = Donation::find()->one();

        if ($model === null) {
            $model = new Donation();
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