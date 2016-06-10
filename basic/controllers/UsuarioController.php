<?php

namespace app\controllers;

use Yii;
use app\models\Usuario;
use app\models\UsuarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */
class UsuarioController extends Controller
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
     * Lists all Usuario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsuarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuario model.
     * @param integer $COD_USUARIO
     * @param integer $COD_ROL
     * @return mixed
     */
    public function actionView($COD_USUARIO, $COD_ROL)
    {
        return $this->render('view', [
            'model' => $this->findModel($COD_USUARIO, $COD_ROL),
        ]);
    }

    /**
     * Creates a new Usuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Usuario();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'COD_USUARIO' => $model->COD_USUARIO, 'COD_ROL' => $model->COD_ROL]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Usuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $COD_USUARIO
     * @param integer $COD_ROL
     * @return mixed
     */
    public function actionUpdate($COD_USUARIO, $COD_ROL)
    {
        $model = $this->findModel($COD_USUARIO, $COD_ROL);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'COD_USUARIO' => $model->COD_USUARIO, 'COD_ROL' => $model->COD_ROL]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Usuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $COD_USUARIO
     * @param integer $COD_ROL
     * @return mixed
     */
    public function actionDelete($COD_USUARIO, $COD_ROL)
    {
        $this->findModel($COD_USUARIO, $COD_ROL)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $COD_USUARIO
     * @param integer $COD_ROL
     * @return Usuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($COD_USUARIO, $COD_ROL)
    {
        if (($model = Usuario::findOne(['COD_USUARIO' => $COD_USUARIO, 'COD_ROL' => $COD_ROL])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
