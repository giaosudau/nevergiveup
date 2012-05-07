<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    private $loginStatus = false;

    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the
            // contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF
            ),
            // page action renders "static" pages stored under
            // 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction'
            )
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        //$this->render('index');
        $this->layout = false;

        $this->render('homepage-unlogin');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error ['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm ();
        if (isset($_POST ['ContactForm'])) {
            $model->attributes = $_POST ['ContactForm'];
            if ($model->validate()) {
                $headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                mail(Yii::app()->params ['adminEmail'], $model->subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array(
            'model' => $model
        ));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm ();

        // if it is ajax validation request
        if (isset($_POST ['ajax']) && $_POST ['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST ['LoginForm'])) {
            $model->attributes = $_POST ['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                $this->loginStatus = true;
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form
        $this->render('login', array(
            'model' => $model
        ));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionRegister() {
        if (!Yii::app()->user->id > 0) {
            $user = new Register ();

            // uncomment the following code to enable ajax-based validation
            /*
             * if(isset($_POST['ajax']) &&
             * $_POST['ajax']==='register-register-form') { echo
             * CActiveForm::validate($model); Yii::app()->end(); }
             */

            if (isset($_POST ['Register'])) {

                $user->attributes = $_POST ['Register'];
                if ($user->validate()) {
                    $user->beforeSave();
                    $user->save();
                    // create friend_list when register;
                    $friendlist = new FriendList ();
                    // create friendlist
                    $friendlist->user_id = $user->user_id;
                    $friendlist->save();
                    //
                    $this->redirect(Yii::app()->user->returnUrl);
                    return;
                }
            }
            $this->render('register', array(
                'model' => $user
            ));
        }
    }

    public function actionHomePage() {
        $model = new LoginForm();      
        $model->username = $_POST['usernamelogin'];
        $model->password = $_POST['passwordlogin'];
        $model->rememberMe =1;
        //echo $model->errors;
        
        echo $model->username . "&&" . $model->password . "$$" .$model->rememberMe;
        // validate user input and redirect to the previous page if valid        
        if ($model->validate() && $model->login()) {
            $this->loginStatus = true;
            //echo  var_dump($model->getErrors());
            //$this->redirect(Yii::app()->user->returnUrl);
            echo "SUCCESS";
        } else {

          echo "ERROR";
           var_dump($model->getErrors());
        }
         
    }

    function actionProfile() {
        if (Yii::app()->user->id > 0) {
            $model = new Profile('Register');
            $model->user_id = Yii::app()->user->id;

            // uncomment the following code to enable ajax-based validation
            /*
             * if(isset($_POST['ajax']) &&
             * $_POST['ajax']==='profile-profile-form') { echo
             * CActiveForm::validate($model); Yii::app()->end(); }
             */

            if (isset($_POST ['Profile'])) {
                $model->attributes = $_POST ['Profile'];
                if ($model->validate()) {
                    $model->save();
                    $this->redirect(Yii::app()->user->returnUrl);
                    return;
                }
            }
            $this->render('profile', array(
                'model' => $model
            ));
        }
    }

}