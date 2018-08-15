<?php

namespace backend\modules\admin\controllers;

use Yii;
use common\models\Page;
use common\models\Seo;
use common\models\PageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * PageController implements the CRUD actions for Page model.
 */
class PagesController extends Controller {

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
     * Lists all Page models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new PageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Page model.
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
     * Creates a new Page model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Page();
        $model2 = new Seo();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                $se = Yii::$app->request->post('Seo');
                if (!empty($se['meta_title'] || $se['meta_desc'] || $se['meta_keyword'])) {
                    $model2->url_path = '/' . $model->slug;
                    $model2->meta_values = json_encode(Yii::$app->request->post('Seo'));
                    $model2->save();
                    return $this->redirect(['index']);
                } else {
                    return $this->redirect(['index']);
                }
            }
        }

        return $this->render('create', [
                    'model' => $model,
                    'model2' => $model2,
        ]);
    }

    /**
     * Updates an existing Page model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $model2 = Seo::findOne(['url_path' => '/' . $model->slug]);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                $se = Yii::$app->request->post('Seo');
                if (!empty($se['meta_title'] || $se['meta_desc'] || $se['meta_keyword'])) {
                    $model2->url_path = '/' . $model->slug;
                    $model2->meta_values = json_encode(Yii::$app->request->post('Seo'));
                    $model2->save();
                    return $this->redirect(['index']);
                } else {
                    return $this->redirect(['index']);
                }
            }
        }

        return $this->render('update', [
                    'model' => $model,
                    'model2' => $model2,
        ]);
    }

    /**
     * Deletes an existing Page model.
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
     * Finds the Page model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Page the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Page::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
