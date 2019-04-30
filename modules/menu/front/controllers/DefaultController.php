<?php
/**
 * Created by PhpStorm.
 * User: yevgeniy
 * Date: 5/13/15
 * Time: 10:38 AM
 */
namespace app\modules\menu\front\controllers;


use app\components\RFController;
use app\modules\banners\models\Banners;
use app\modules\menu\models\Menus;
use yii\web\NotFoundHttpException;

class DefaultController extends RFController
{

    public $actions = [
        'index' => Banners::PAGE_ALL
    ];

    public function actionIndex()
    {
        $menu = \Yii::$app->db->cache(function () {
            return Menus::find()->where(['menus.id' => 3])->one();
        }, 1000);

        if ($menu === null) {
            throw new NotFoundHttpException;
        }
        $this->setMeta('Карта сайта', 'Карта сайта');
        $this->breadcrumbs = [
            'Карта сайта'
        ];
        return $this->render('index', ['menu' => $menu]);
    }
}