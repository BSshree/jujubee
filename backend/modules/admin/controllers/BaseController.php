<?php

namespace backend\modules\admin\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\helpers\Url;

/**
 * Site controller
 */
class BaseController extends Controller {
    /**
     * {@inheritdoc}
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['logout', 'signup'],
//                'rules' => [
//                    [
//                        'actions' => ['signup'],
//                        'allow' => true,
//                        'roles' => ['?'],
//                    ],
//                    [
//                        'actions' => ['logout'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function actions()
//    {
//        return [
//            'error' => [
//                'class' => 'yii\web\ErrorAction',
//            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
//        ];
//    }

    /**
     * @var string meta tag keywords content 
     */
    public $keywords = '';

    /**
     * @var string meta tag description content 
     */
    public $description = '';

    /**
     * This method is invoked at the beginning of {@link render()}.
     * @param string $view the view to be rendered
     * @return boolean whether the view should be rendered.
     */
    protected function beforeRender($view) {
        list($keyword, $description) = Yii::app()->seoHelper->findMetaTags();
        $this->keywords = $keyword ? $keyword : Yii::app()->settings->get('meta', 'keywords');
        $this->description = $description ? $description : Yii::app()->settings->get('meta', 'description');

        return parent::beforeRender($view);
    }

}
