<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 08.04.19
 * Time: 18:21
 */

namespace app\modules\events\front\controllers;


use app\modules\events\models\Category;
use app\modules\events\models\Event;
use mtemplate\mcontrollers\MBTController;
use yii\data\Pagination;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;

class DefaultController extends MBTController
{
    public function actionIndex()
    {

        $this->layout = '//front/content';

        $query = Event::find();

        $filter = \Yii::$app->request->get('query');

        if (!empty($filter) && !in_array('all', $filter, null)) {
            $query->joinWith('categories')
                ->andWhere(['categories.id' => $filter]);

        }

        $query->andWhere(['events.is_active' => 1]);

        $countQuery = clone $query;

        $count = $countQuery->count();

        $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 6, 'forcePageParam' => false]);

        $models = $query->limit($pagination->limit)->offset($pagination->offset)->orderBy(['events.created_at' => SORT_DESC])->all();

        $categories = Category::find()->active()->all();

        $this->setMeta('Жизнь церкви');

        return $this->render('index', ['models' => $models, 'categories' => $categories, 'pagination' => $pagination]);
    }

    public function actionView($slug)
    {
        $this->layout = '//front/content';

        $model = Event::find()->where(['slug' => $slug])->active()->one();

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        $image = null;

        if (!empty($model->image)) {
            $image = mb_substr(Url::home(true), 0, -1) . $model->getThumbUploadUrl('image', 'list');
        }


        $this->setMeta($model->meta_title ? $model->meta_title : $model->title,
            $model->meta_description ? $model->meta_description : $model->short_text,
            $model->meta_keywords, $image);

        return $this->render('view', ['model' => $model]);
    }
}