<?php

class RegisterController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('create', 'view','uploadimage'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('update', 'newfriend','uploadimage'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('index', 'admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Register();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Register'])) {
            $model->attributes = $_POST['Register'];
            $model->beforeSave();
            if ($model->save()) {
                // create friend list of user
                $friend_list = new FriendList();
                $friend_list->user_id = $model->user_id;
                $friend_list->save();
                // create Profile
                $profile = new Profile();
                $profile->user_id = $model->user_id;
                $profile->created = date("Y-m-d H:m:s");
                $profile->save();
                // redirect to home page
                $this->redirect(array('view', 'id' => $model->user_id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Register'])) {
            $model->attributes = $_POST['Register'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->user_id));
        }

        $this->render('uploadImage', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {

        $dataProvider = new CActiveDataProvider('Register');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionUploadImage() {
        $valid_formats = array('jpg', 'png', 'jpeg', 'bmp');
        $path = $baseUrl = Yii::app()->baseUrl .'/images/uploads/';
        $user_id = Yii::app()->user->id;
        
        if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_FILES['photoimg']['name'];
            $size = $_FILES['photoimg']['size'];
            if (strlen($name)) {
                list($txt, $ext) = explode(".", $name);
            }
            if (in_array($ext, $valid_formats)) {
                if ($size < (1024 * 1024 * 4)) {
                    $actual_image_name = time() . $user_id . "." . $ext;
                    $tmp = $_FILES['photoimg']['tmp_name'];                    
                    if(move_uploaded_file($tmp, 'images/uploads/'.$actual_image_name)){
                        $user = $this->loadModel(2);
                        $user->picture = $actual_image_name;
                        $user->active = 22;
                        $user->save();
                        
                        echo  "<img src='../../../images/uploads/".$actual_image_name."' class='preview'>";
                        echo $user->picture;
                        $ss = $this->loadModel(2);
                        echo $ss->picture;
                    }
                    else echo "Failed"; 
                }
                else echo "File Size Must Max 4MB"; 
            }
            else echo "Invalid Format";
        }
        else echo "Please Select Image";
        
        
    }

    public function actionAdmin() {
        $model = new Register('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Register']))
            $model->attributes = $_GET['Register'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Register::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'register-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionNewFriend($id) {
        //$model = Register::model()->findByPk($id);
        $friend = new Friend;
        $friend->user_id = $id;
        //$friend->user_id = $this->user_id;
        $friend->created = date("Y-m-d H:m:s");
        //$command = FriendList::model()->find('friend_list_id=' . Yii::app()->user->id);
        //$command = Yii::app()->db->createCommand('SELECT friend_list_id FROM friend_list WHERE user_id=' . Yii::app()->user->id);
        // $getfriendlistid = $command->query();
        //$teamArray = CHtml::listData($command, 'friend_list_id', 'user_id');
        //echo $this->user_id;
        // $record = $getfriendlistid->read();
        $idfriend = Register::model()->addFriend();
        $friend->friend_list_id = $idfriend;
        return $friend->save();

        // Register::model()->addFriend($friend);
    }

}
