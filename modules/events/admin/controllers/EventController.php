<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 02.04.19
 * Time: 15:33
 */

namespace app\modules\events\admin\controllers;


use app\modules\events\models\Event;
use app\modules\events\models\EventSearch;
use app\modules\events\models\Tag;
use mtemplate\mcontrollers\MBTAController;
use Yii;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class EventController extends MBTAController
{
    public $allowedRoles = ['admin'];

    /**
     * Lists all Event models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Event model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Event();

        $model->setScenario('insert');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        $model->setScenario('update');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Deletes an existing Event model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Content model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Event | null
     */
    protected function findModel($id)
    {
        return Event::findOne($id);
    }

    public function actionFindTags($query)
    {
        $models = Tag::find()->where(['like', 'name', $query])->all();
        $items = [];

        foreach ($models as $model) {
            $items[] = ['name' => $model->name];
        }

        Yii::$app->response->format = Response::FORMAT_JSON;

        return $items;
    }
}