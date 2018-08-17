<?php

namespace frontend\modules\site\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\PasswordResetRequestForm;
use common\models\ResetPasswordForm;
use common\models\SignupForm;
use common\models\ContactForm;
use common\models\Page;
use common\models\Work;
use common\models\Contactus;
use common\models\CareerForm;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                        [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                        [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionPages($slug) {
        if ($pagez = Page::findOne(['slug' => $slug])) { //for services page title,desc,keywrd presents so it can be automatically called by main.php
            $formatted_content = Yii::$app->shortcodes->parse($pagez->content);
            return $this->render('/pages/common_page', ['pagez' => $pagez, 'formatted_content' => $formatted_content]);
        } else {
            if ($slug == 'work') { // for work page seo pages are called
                $works = Work::find()->all();
                $categories = \yii\helpers\ArrayHelper::map($works, 'category', 'category');
                return $this->render('/pages/work', ['works' => $works, 'categories' => $categories]);
            }
            return $this->render('/pages/' . $slug);
        }
    }

    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

    public function actionContacts() {
        $model = new Contactus();

        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model->name = $data['na1'];
            $model->email = $data['em1'];
            $model->phone = $data['ph1'];
            $model->message = $data['mes1'];
            $model->save();

            if ($data['form'] == 'contact') {
                $mail_sub1 = 'Enquire A Contact';
                $mail_body1 = "<p>Hi Admin,</p>";
                $mail_body1 .= "You have a new contact. <br><br>";
                $mail_body1 .= "<table cellpadding='10' border='1' >";
                $mail_body1 .= "<tr><th>Name: </th><td>" . $model->name . "</td></tr>";
                $mail_body1 .= "<tr><th>Email:</th><td>" . $model->email . "</td></tr>";
                $mail_body1 .= "<tr><th>Phone: </th><td>" . $model->phone . "</td></tr>";
                $mail_body1 .= "<tr><th>Message: </th><td>" . $model->message . "</td></tr>";
                $mail_body1 .= "</table><br><br>";
                // $mail_body1 .= "Name: " . $na1 . "<br>Email: " . $em1 . " <br> Phone: " . $ph1 . "<br>Message: " . $mes1 . "<br><br>";
                $mail_body1 .= "<strong>Regards, </strong><br>";
                $mail_body1 .= "<strong>Jujubee Media </strong><br><br>";

                $mail_sub2 = 'Enquire A Contact';
                $mail_body2 = "<p>Hi " . $model->name . ",</p>";
                $mail_body2 .= "Thank you for contacting us!<br>We will get back to you at the earliest.<br><br>";
                $mail_body2 .= "<strong>Regards, </strong><br>";
                $mail_body2 .= "<strong>Jujubee Media </strong><br><br>";

                $emailSend1 = Yii::$app->mailer->compose()
                        ->setFrom(['sumanasdev@gmail.com'])
                        ->setTo('banushree@arkinfotec.com')
                        ->setSubject($mail_sub1)
                        ->setHtmlBody($mail_body1)
                        ->send();
                $emailSend2 = Yii::$app->mailer->compose()
                        ->setFrom(['sumanasdev@gmail.com'])
                        ->setTo($model->email)
                        ->setSubject($mail_sub2)
                        ->setHtmlBody($mail_body2)
                        ->send();

                if ($emailSend1 && $emailSend2) {
                    echo "success";
                    exit;
                } else {
                    echo "error";
                    exit;
                }
            }
        }


        return $this->render('contactus', [
                    'model' => $model,
        ]);
    }

    
    public function actionCareer() {
       
         $model = new CareerForm();

        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model->resume = UploadedFile::getInstance($model, 'resume');
            if ($model->resume) {
                $file_name = str_replace(' ', '-', $model->resume->baseName);
                $randno = rand(11111, 99999);
                $folder = Yii::$app->basePath . '/web/uploads/';
                $model->resume->saveAs($folder . '/' . $randno . $model->resume->baseName . '.' . $model->resume->extension);
                $model->resume = $randno . $model->resume->baseName . '.' . $model->resume->extension;
                //$path = Yii::getAlias('@frontend') . '/web/uploads/';
                //$model->resume->saveAs($path . $model->resume);
            }
            
            $model->name = $data['na1'];
            $model->email = $data['em1'];
            $model->phone = $data['ph1'];
            $model->message = $data['mes1'];
            $model->know_by = $data['kn1'];
            $hidden = $data['hid1'];
            
            $model->save();
            
             if ($data['form'] == 'career') {
                $mail_sub1 = 'Enquire A Profile';
                $mail_body1 = "<p>Hi Admin,</p>";
                $mail_body1 .= "You have a new job profile. <br><br>";
                $mail_body1 .= "<table cellpadding='10' border='1' >";
                $mail_body1 .= "<tr><th>Name: </th><td>" . $model->name . "</td></tr>";
                $mail_body1 .= "<tr><th>Email:</th><td>" . $model->email . "</td></tr>";
                $mail_body1 .= "<tr><th>Phone: </th><td>" . $model->phone . "</td></tr>";
                $mail_body1 .= "<tr><th>Message: </th><td>" . $model->message . "</td></tr>";
                $mail_body1 .= "<tr><th>Refered By: </th><td>" . $model->know_by . "</td></tr>";
                $mail_body1 .= "<tr><th>Designation: </th><td>" . $hidden . "</td></tr>";
                $mail_body1 .= "</table><br><br>";
                // $mail_body1 .= "Name: " . $na1 . "<br>Email: " . $em1 . " <br> Phone: " . $ph1 . "<br>Message: " . $mes1 . "<br><br>";
                $mail_body1 .= "<strong>Regards, </strong><br>";
                $mail_body1 .= "<strong>Jujubee Media </strong><br><br>";

                $mail_sub2 = 'Enquire A Profile';
                $mail_body2 = "<p>Hi " . $model->name . ",</p>";
                $mail_body2 .= "Thank you for contacting us!<br>We will get back to you at the earliest.<br><br>";
                $mail_body2 .= "<strong>Regards, </strong><br>";
                $mail_body2 .= "<strong>Jujubee Media </strong><br><br>";

                $emailSend1 = Yii::$app->mailer->compose()
                        ->setFrom(['sumanasdev@gmail.com'])
                        ->setTo('banushree@arkinfotec.com')
                        ->setSubject($mail_sub1)
                        ->setHtmlBody($mail_body1)
                        ->send();
                $emailSend2 = Yii::$app->mailer->compose()
                        ->setFrom(['sumanasdev@gmail.com'])
                        ->setTo($model->email)
                        ->setSubject($mail_sub2)
                        ->setHtmlBody($mail_body2)
                        ->send();

                if ($emailSend1 && $emailSend2) {
                    echo "success";
                    exit;
                } else {
                    echo "error";
                    exit;
                }
            }
        }
        
        
    }
}
