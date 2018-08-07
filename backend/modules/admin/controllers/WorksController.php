<?php

namespace backend\modules\admin\controllers;

use Yii;
use common\models\Work;
use common\models\WorkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * WorksController implements the CRUD actions for Work model.
 */
class WorksController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                        [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Work models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new WorkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Work model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Work model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Work();

        if ($model->load(Yii::$app->request->post())) {
            $model->thumbnail = UploadedFile::getInstance($model, 'thumbnail');
            $model->project_image = UploadedFile::getInstance($model, 'project_image');
            $model->save();
            if ($model->thumbnail) {
                $folder = Yii::$app->basePath . '/web/uploads/';
                $model->thumbnail->saveAs($folder . '/' . $model->thumbnail->baseName . '.' . $model->thumbnail->extension);
            }
            if ($model->project_image) {
                $folder = Yii::$app->basePath . '/web/uploads/';
                $model->project_image->saveAs($folder . '/' . $model->project_image->baseName . '.' . $model->project_image->extension);
            }
            return $this->redirect(['index']);
        }
        return $this->render('create', [
                    'model' => $model
        ]);
    }

    /**
     * Updates an existing Work model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
            $old_image = $model->thumbnail;
            $old_pro_image = $model->project_image;

        if ($model->load(Yii::$app->request->post())) {
            $model->thumbnail = UploadedFile::getInstance($model, 'thumbnail');
            $model->project_image = UploadedFile::getInstance($model, 'project_image');
            $model->save();
            if ($model->thumbnail) {
                $folder = Yii::$app->basePath . '/web/uploads/';
                $model->thumbnail->saveAs($folder . '/' . $model->thumbnail->baseName . '.' . $model->thumbnail->extension);
                if (!empty($old_image)) {
                    unlink(Yii::$app->basePath . '/web/uploads/' . $old_image);
                }
            }else{
                 $model->thumbnail = $old_image;
                 $model->save();
            }
            if ($model->project_image) {
                $folder = Yii::$app->basePath . '/web/uploads/';
                $model->project_image->saveAs($folder . '/' . $model->project_image->baseName . '.' . $model->project_image->extension);
                if (!empty($old_pro_image)) {
                    unlink(Yii::$app->basePath . '/web/uploads/' . $old_pro_image);
                }
            }else{
                 $model->project_image = $old_pro_image;
                 $model->save();
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Work model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Work model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Work the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Work::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
