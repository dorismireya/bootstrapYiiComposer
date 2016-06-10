<?php

namespace app\controllers;

use Yii;
use app\models\Rol;
use app\models\RolSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RolController implements the CRUD actions for Rol model.
 */
class RolController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Rol models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RolSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rol model.
     * @param integer $COD_ROL
     * @param integer $COD_SISTEMA
     * @return mixed
     */
    public function actionView($COD_ROL, $COD_SISTEMA)
    {
        return $this->render('view', [
            'model' => $this->findModel($COD_ROL, $COD_SISTEMA),
        ]);
    }

    /**
     * Creates a new Rol model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Rol();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'COD_ROL' => $model->COD_ROL, 'COD_SISTEMA' => $model->COD_SISTEMA]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Rol model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $COD_ROL
     * @param integer $COD_SISTEMA
     * @return mixed
     */
    public function actionUpdate($COD_ROL, $COD_SISTEMA)
    {
        $model = $this->findModel($COD_ROL, $COD_SISTEMA);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'COD_ROL' => $model->COD_ROL, 'COD_SISTEMA' => $model->COD_SISTEMA]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Rol model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $COD_ROL
     * @param integer $COD_SISTEMA
     * @return mixed
     */
    public function actionDelete($COD_ROL, $COD_SISTEMA)
    {
        $this->findModel($COD_ROL, $COD_SISTEMA)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Rol model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $COD_ROL
     * @param integer $COD_SISTEMA
     * @return Rol the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($COD_ROL, $COD_SISTEMA)
    {
        if (($model = Rol::findOne(['COD_ROL' => $COD_ROL, 'COD_SISTEMA' => $COD_SISTEMA])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
