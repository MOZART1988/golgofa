<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 09.04.19
 * Time: 11:27
 */

namespace app\modules\pages\front\controllers;


use app\modules\pages\models\Pages;
use mtemplate\mcontrollers\MBTController;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;

class DefaultController extends MBTController
{
    public function actionIndex()
    {
        $this->layout = '//front/content';

        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['is_active' => 1]),
            'sort' => ['defaultOrder' => ['created_at' => SORT_DESC]],
            'pagination' => [
                'pageSize' => 9
            ]
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionView($slug)
    {
        $this->layout = '//front/content';

        $model = Pages::find()->where(['slug' => $slug])->active()->one();

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        $image = null;

        if (!empty($model->image)) {
            $image = mb_substr(Url::home(true), 0, -1) . $model->getThumbUploadUrl('image', 'list');
        }


        $this->setMeta($model->meta_title ? $model->meta_title : $model->title,
            $model->meta_description ? $model->meta_description : $model->text,
            $model->meta_keywords, $image);

        return $this->render('view', ['model' => $model]);
    }
}