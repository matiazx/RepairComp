<?php

namespace frontend\controllers;

use common\models\Dispositivo;
use common\models\DispositivoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DispositivoController implements the CRUD actions for Dispositivo model.
 */
class DispositivoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Dispositivo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DispositivoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dispositivo model.
     * @param int $idDispositivo Id Dispositivo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idDispositivo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idDispositivo),
        ]);
    }

    /**
     * Creates a new Dispositivo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dispositivo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idDispositivo' => $model->idDispositivo]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dispositivo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idDispositivo Id Dispositivo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idDispositivo)
    {
        $model = $this->findModel($idDispositivo);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idDispositivo' => $model->idDispositivo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dispositivo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idDispositivo Id Dispositivo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idDispositivo)
    {
        $this->findModel($idDispositivo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dispositivo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idDispositivo Id Dispositivo
     * @return Dispositivo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idDispositivo)
    {
        if (($model = Dispositivo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
