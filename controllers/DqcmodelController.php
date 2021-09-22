<?php

namespace app\controllers;

use Yii;
use app\models\Dqcmodel;
use app\models\DqcmodelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DqcmodelController implements the CRUD actions for Dqcmodel model.
 */
class DqcmodelController extends Controller
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
     * Lists all Dqcmodel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DqcmodelSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dqcmodel model.
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
     * Creates a new Dqcmodel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dqcmodel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {

                Yii::$app->session->setFlash('success', '<b>'.'</b> Cadastro Efetuado com Sucesso!');
   
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
     * Updates an existing Dqcmodel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            
            Yii::$app->session->setFlash('success', '<b>'.'</b> Cadastro Atualizado com Sucesso!');
   
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dqcmodel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {

        $connection = Yii::$app->db;

        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('danger', '<b>'.'</b> Cadastro Deletado com Sucesso!');
   

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dqcmodel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Dqcmodel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dqcmodel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
