<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 15.04.2019
 * Time: 0:04
 */

namespace app\modules\basepage\admin\controllers;

use app\modules\basepage\models\Slides;
use Yii;
use app\modules\basepage\models\SlidesSearch;
use mtemplate\mcontrollers\MBTAController;
use yii\web\NotFoundHttpException;

class SlidesController extends MBTAController
{
    public $allowedRoles = ['admin'];

    /**
     * Lists all Slides models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SlidesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Slides model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Slides();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Content model.
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
     * Deletes an existing Slides model.
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
     * @return Slides | null
     */
    protected function findModel($id)
    {
        return Slides::findOne($id);
    }

    public function actionMove($id, $type)
    {
        $model = self::findModel($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        $currentPosition = $model->position;

        if ($type === 'up') {

            $prev = $model->prev;

            if ($prev !== null) {
                $model->position = $prev->position;
                $model->save(false, ['position']);
                $prev->position = $currentPosition;
                $prev->save(false, ['position']);
            }
        } else {
            $next = $model->next;
            if ($next !== null) {
                $model->position = $next->position;
                $model->save(false, ['position']);
                $next->position = $currentPosition;
                $next->save(false, ['position']);
            }
        }

        return $this->redirect(['index']);
    }
}