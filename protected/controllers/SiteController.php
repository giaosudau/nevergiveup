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
        if (Yii::app()->user->id > 0) {
            $this->redirect(Yii::app()->baseUrl . "/index.php/status");
        }
        else
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

    public function actionIndexRegister() {
        $model = new Register();
        $model->email = $_POST['email_register'];
        $model->name_first = $_POST['firstname'];
        $model->name_last = $_POST['lastname'];
        $model->password = md5($_POST['password_register']);
        $model->password_repeat = md5($_POST['password_repeat']);
        $model->created = date('Y-m-d H:i:s');
        $model->active = 1;
        $model->picture = '';
        // friend list
        $friend_list = new FriendList();

        // create Profile
        $profile = new Profile();

        $profile->created = date("Y-m-d H:m:s");
        $profile->dob = date('F d, Y ', strtotime($_POST['dob']));
        if ($_POST['sex'] == 1) {
            $profile->sex = 'Male';
        } else if ($_POST['sex'] == 2) {
            $profile->sex = 'Female';
        }
        if ($model->save()) {
            $profile->user_id = $model->user_id;
            $friend_list->user_id = $model->user_id;
            $profile->save();
            $friend_list->save();
            $identity = new UserIdentity($model->email, $model->password);
            $identity->authenticate();
            $identity->errorCode = UserIdentity::ERROR_NONE;
            if (Yii::app()->user->login($identity, 3600))
                echo "SUCCESS";
        } else {
            echo (json_encode($model->getErrors()));
        }
    }

    public function actionIndexLogin() {
        $model = new LoginForm();
        $model->email = $_POST['emaillogin'];
        $model->password = $_POST['passwordlogin'];
        $model->rememberMe = 1;
        //echo $model->errors;
        // echo $model->email . "&&" . $model->password . "$$" .$model->rememberMe;
        // validate user input and redirect to the previous page if valid        
        if ($model->validate() && $model->login()) {
            $this->loginStatus = true;
            //echo  var_dump($model->getErrors());
            //$this->redirect(Yii::app()->user->returnUrl);
            echo "SUCCESS";
        } else {
            echo (json_encode($model->getErrors()));
        }
    }

    public function actionAjaxSearch() {
        $this->render("search");
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

    public function actionUpdateNotification() {
        $friend_ids = Notification::model()->findAllByAttributes(array(
            'type' => 'friend_request',
            'user_id' => Yii::app()->user->id,
                ));
        $result = array();
        foreach ($friend_ids as $friend_id) {
            array_push($result, $friend_id['msg']);
        }
        $friends = array();
        foreach ($result as $user) {
            $u = Register::model()->findByPk($user);
            array_push($friends, array('user_id' => $u->user_id, 'picture' => $u->picture,
                'name' => $u->name_first . " " . $u->name_last));
        }
        $friend_request = array('friend_request' => count(
                    Notification::model()->findAllByAttributes(array(
                        'type' => 'friend_request',
                        'user_id' => Yii::app()->user->id,
                    ))),
            'request' => $friends
        );
        echo json_encode($friend_request);
    }

    public function actionRenderHeader() {
        $this->layout = false;
        $this->render('header');
    }

    public function actionAcceptFriendRequest() {
        $friend_id = $_POST['user_id'];
        $notification_id = "";
        Notification::model()->deleteAllByAttributes(array(
            'notification_id' => Notification::model()->findByAttributes(
                    array('user_id' => Yii::app()->user->id,
                        'msg' => $friend_id))->notification_id)
        );
        $this->addFriend($friend_id);

        echo "SUCCESS";

        //notification friend accept;
    }

    public function actionDeclineFriendRequest() {
        $friend_id = $_POST['user_id'];
        $notification_id = "";
        Notification::model()->deleteAllByAttributes(array(
            'notification_id' => Notification::model()->findByAttributes(
                    array('user_id' => Yii::app()->user->id,
                        'msg' => $friend_id))->notification_id)
        );
        echo "SUCCESS";
        //Notification::model()->deleteByPk($notification_id);
        // notification friend decline
    }

    public function actionSendFriendRequest() {
        $friend_id = $_POST['friend_id'];
        $fr = new Notification();
        $fr->user_id = $friend_id;
        $fr->type = 'friend_request';
        //$msg = array('user_id' => Yii::app()->user->id, 'type'=>'friend_request');
        $fr->msg = Yii::app()->user->id;
        $fr->created = date('Y-m-d H:i:s');
        $fr->save();
        $data = array('user_id' => $fr->user_id, 'type' => $fr->type, 'msg' => $fr->msg);
        echo json_encode($data);
    }

    public function addFriend($friend_id) {
        $friend = new Friend;
        $friend->created = date('Y-m-d H:i:s');
        $friend->user_id = $friend_id; // user cua thang muon ket ban
        $friend->friend_list_id = FriendList::model()->findByAttributes(array(
                    'user_id' => Yii::app()->user->id
                ))->friend_list_id;
        $friend->save();
        //
        $friend1 = new Friend();
        $friend1->created = date('Y-m-d H:i:s');
        $friend1->user_id = $friend_id;
        
        $friend_list = new FriendList;
        $friend_list->user_id = Yii::app()->user->id;
        $friend_list->friend_id = $friend->friend_id;
        $friend_list->save();
    }

    public function actionExtractingURL() {
        if ($_GET['url']) {
            $url = $_GET['url'];
            echo file_get_contents($url);
        }
    }

    public static function createNotification($type) {
        $types = array('friend_request', 'comment', 'friend_accept', 'status', 'like_status');
        switch ($type) {
            case $types[0]:
                //$json = array('user_id'=>$user_id,'')
                break;
            case $types[1]:
                break;
            case $types[2]:
                break;
            case $types[3]:
                break;
            case $types[4]:
                break;
            default:
                break;
        }
    }

}