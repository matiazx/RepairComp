<?php

namespace frontend\controllers;


use common\models\Servico;
use common\models\ServicoSearch;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

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
        $request = Yii::$app->request;
        $search = null;

        if($request->get('ServicoSearch')){
            $search = $request->get('ServicoSearch');

            $searchModel = new ServicoSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $search);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }else{
            $searchModel = new ServicoSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $search);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
    }

    /**
     * Displays a single Servico model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
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
        $model->data = date("Y-m-d H:i:s");
        $model->id= Yii::$app->user->identity->id;


        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
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
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

        public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if (\Yii::$app->user->can('updateOwnServico', ['servico' => $model]) || array_keys(Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()))[0] == "admin"|| array_keys(Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()))[0] == "tecnico"|| array_keys(Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()))[0] == "gestor") {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                if($model->estado == 2 && $model->idRelatorio == null){
                    $this->redirect(['relatorio/create', 'idservico' => $model->idservico]);
                }else{
                    return $this->redirect(['view', 'id' => $model->idservico]);
                }
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }else{
            throw new ForbiddenHttpException("You are not allowed to perform this action.");
        }
    }


    /**
     * Deletes an existing Servico model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Servico model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Servico the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Servico::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
