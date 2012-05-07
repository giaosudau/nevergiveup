<?php

class StatusController extends Controller {

    /**
     *
     * @var string the default layout for the views. Defaults to
     *      '//layouts/column2', meaning
     *      using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     *
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl'  // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     *
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array(
                'allow', // allow all users to perform 'index' and
                // 'view' actions
                'actions' => array(
                    'index',
                    'view'
                ),
                'users' => array(
                    '*'
                )
            ),
            array(
                'allow', // allow authenticated user to perform 'create'
                // and 'update' actions
                'actions' => array(
                    'create',
                    'update',
                    "ajaxcreate",
                    'status_thumbup'
                ),
                'users' => array(
                    '@'
                )
            ),
            array(
                'allow', // allow admin user to perform 'admin' and
                // 'delete' actions
                'actions' => array(
                    'admin',
                    'delete'
                ),
                'users' => array(
                    'admin'
                )
            ),
            array(
                'deny', // deny all users
                'users' => array(
                    '*'
                )
            )
        );
    }

    /**
     * Displays a particular model.
     *
     * @param integer $id
     *        	the ID of the model to be displayed
     */
    // public function actionView($id) {
    // $status = $this->loadModel($id);
    // $comment = $this->newComment($status);
    // $this->render('view', array(
    // 'status' => $this->loadModel($id),
    // 'comment' => $comment,
    // ));
    // }
    public function actionView($id) {
        $post = $this->loadModel($id);
        $comment = $this->newComment($post);
        $like = 'Like';
        $record = count(ThumbUpDown::model()->findAllByAttributes(array('status_id' => $id, 'friend_id' => Yii::app()->user->id))) > 0;
        if ($record) {
            $like = 'Unlike';
        }

        //$post->thumbUp ( $id );
        //echo $post->getThumbUp ( $id );
        $this->render('view', array(
            'model' => $post,
            'comment' => $comment,
            'like' => $like
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view'
     * page.
     */
    public function actionAjaxCreate() {
        $model = new Status ();
        if (isset($_POST['status'])) {
            $model->message = $_POST['status'];
            $model->created = date("Y-m-d H:m:s");
            $model->user_id = Yii::app()->user->id;
            $model->thumbs_down = $model->thumbs_up = 0;
            $user ='hhhhhhh'; //Register::model()->findByPk(array('status_id' =>$model->user_id))->email;
            if ($model->save())
                echo '<div class="load_status">
                            <div class="status_img"><img src="blankSilhouette.png" /></div>
                            <div class="status_text"><a href="#" class="blue"><?PHP echo $user; ?></a>
                            <p class="text">' . $model->message . '</p>
                            <div class="date">' .$model->created . ' &middot; <a href="#" class="light_blue">
                            Like</a> &middot; <a href="#" class="light_blue">Comment</a></div>
                            </div>
                            <div class="clear"></div>
                            </div>';
        }
    }

    public function actionCreate() {
        $model = new Status ();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST ['Status'])) {
            $model->attributes = $_POST ['Status'];
            $model->created = date('Y-m-d H:i:s');
            $model->user_id = Yii::app()->user->id;
            $model->thumbs_down = $model->thumbs_up = 0;

            if ($model->save())
                $this->redirect(array(
                    'view',
                    'id' => $model->status_id
                ));
        }

        $this->render('create', array(
            'model' => $model
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view'
     * page.
     *
     * @param integer $id
     *        	the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST ['Status'])) {
            $model->attributes = $_POST ['Status'];
            if ($model->save())
                $this->redirect(array(
                    'view',
                    'id' => $model->status_id
                ));
        }

        $this->render('update', array(
            'model' => $model
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin'
     * page.
     *
     * @param integer $id
     *        	the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we
            // should not redirect the browser
            if (!isset($_GET ['ajax']))
                $this->redirect(isset($_POST ['returnUrl']) ? $_POST ['returnUrl'] : array(
                            'admin'
                                ) );
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Status');
        // order status
        $dataProvider->sort->defaultOrder = 'status_id DESC';
        $this->render('status', array(
               'dataProvider' => $dataProvider
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Status('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET ['Status']))
            $model->attributes = $_GET ['Status'];

        $this->render('admin', array(
            'model' => $model
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET
     * variable.
     * If the data model is not found, an HTTP exception will be raised.
     *
     * @param
     *        	integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Status::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     *
     * @param
     *        	CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST ['ajax']) && $_POST ['ajax'] === 'status-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function newComment($status) {
        $comment = new Comment ();
        // AJAX
        if (isset($_POST ['ajax']) && $_POST ['ajax'] === 'comment-form') {
            echo CActiveForm::validate($comment);
        }
        if (isset($_POST ['Comment'])) {
            $comment->attributes = $_POST ['Comment'];
            if ($status->addComment($comment)) {
                Yii::app()->user->setFlash('commentSubmitted', 'Thank you for your comment');
                $this->refresh();
            }
        }
        return $comment;
    }

    public function actionStatus_thumbup() {
        $status_id = $_POST['id'];
        $status = $this->loadModel($status_id);
        if ($_POST['name'] == 'up') {
            $status->thumbsUpKick($status_id);
        }
//        if($_POST['name']=='down'){
//            $status->thumbsDownKick($status_id);
//        }

        $thumbs = $status->getThumbUp($status->status_id);
        echo '<b> Liked: </b>' . $thumbs['up'] . '<b> Dislike </b>' . $thumbs['down'];


//		$result = array (
//				'rs' => 0 
//		);
//		if ($_POST ['thumbup'] != '') {
//			$result['thumbup'] = $status->thumbUp_Click( $status_id );
//                        
//		}
//                echo json_encode($result);                
    }

}
