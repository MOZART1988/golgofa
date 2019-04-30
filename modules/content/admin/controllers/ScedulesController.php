<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15.04.19
 * Time: 14:39
 */

namespace app\modules\content\admin\controllers;

use app\modules\content\models\ScedulesSearch;
use Yii;
use app\modules\content\models\Scedules;
use mtemplate\mcontrollers\MBTAController;
use yii\web\NotFoundHttpException;

class ScedulesController extends MBTAController
{
    public $allowedRoles = ['admin'];

    /**
     * Lists all Scedules models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScedulesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Scedules model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Scedules();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Scedules model.
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
     * Deletes an existing Scedules model.
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
     * @return Scedules | null
     */
    protected function findModel($id)
    {
        return Scedules::findOne($id);
    }
}