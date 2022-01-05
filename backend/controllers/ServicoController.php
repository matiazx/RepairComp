<?php

namespace backend\controllers;

use common\models\Servico;
use common\models\ServicoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ServicoController implements the CRUD actions for Servico model.
 */
class ServicoController extends Controller
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
     * Lists all Servico models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ServicoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Servico model.
     * @param int $idservico Idservico
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idservico)
    {
        return $this->render('view', [
            'model' => $this->findModel($idservico),
        ]);
    }

    /**
     * Creates a new Servico model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Servico();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idservico' => $model->idservico]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Servico model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idservico Idservico
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idservico)
    {
        $model = $this->findModel($idservico);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idservico' => $model->idservico]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Servico model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idservico Idservico
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idservico)
    {
        $this->findModel($idservico)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Servico model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idservico Idservico
     * @return Servico the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idservico)
    {
        if (($model = Servico::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
