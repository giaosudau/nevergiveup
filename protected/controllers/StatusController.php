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
                    'view',
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
                    'ajaxcreate',
                    'status_thumbup',
                    'ajaxcomment'
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
                    'ajaxcreate',
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
    public function actionAjaxComment() {
        $model = new Comment();
        $model->status_id = $_POST['status_id'];
        $model->message = $_POST['comment'];
        $model->friend_id = "";
        $model->created = date('Y-m-d H:i:s');
        $baseUrl = Yii::app()->baseUrl;
        if ($model->save()) {
            $json_data = array('status_id' => $model->status_id,
                'comment_id' => $model->comment_id,
                'friend_id' => $model->friend_id,
                'message' => $model->message,
                'avatar' => Register::model()->findByAttributes(array(
                    'user_id' => Yii::app()->user->id))->picture);
            echo CJSON::encode(array(
                'error' => 'false',
                'comment' => $json_data,
            ));
        }
    }
    
    
    
    public static function convertDate2String($inputDate,$dateFormat=1) {

    switch ($dateFormat) {
       case 1:
            return date('F d, Y h:i A', strtotime($inputDate));
       break;

       case 2:
            return date('F d, Y G:i', strtotime($inputDate));
       break;

       case 3:
            return date('M d, Y h:i A', strtotime($inputDate));
       break;

       case 4:
            return date('M d, Y G:i', strtotime($inputDate));
       break;
    }
}





    public function actionAjaxCreate() {
        $model = new Status ();

        if (isset($_POST['status'])) {
            $model->message = $_POST['status'];
            $model->created = date("Y-m-d H:m:s");
            $model->user_id = Yii::app()->user->id;
            $model->thumbs_down = $model->thumbs_up = 0;


            //$status_id = Yii::app()->request->getParam('status_id');

            $comment = Comment::model()->findAllByAttributes(array('status_id' => $model->status_id));
            if (count($comment)) {
                foreach ($comment as $value => $name) {
                    $comment .= CJSON::encode(array('message' => $name->message,
                                'comment_id' => $name->comment_id,
                                'picture' => Friend::model()->findByPk($name->friend_id)->user_id));
                }
            }
            $model->save();

            $json_data = array(
                'status_id' => $model->status_id,
                'message' => $model->message,
                'picture' => Register::model()->findByAttributes(array('user_id' => Yii::app()->user->id))->picture,
                'like' => $model->thumbs_up,
            );

//            echo json_encode($json_data);
//            echo CJSON::encode(array(
//                'error' => 'false',
//                'status' => $json_data,
//                'comment' => $comment,
//            ));
            $date = $this->convertDate2String($model->created);
            echo '
    <div class="stbody">
        <div class="stimg">
            <img style="width:50px;height:50px" src="/nevergiveup/images/uploads/' . $json_data["picture"] . '">
       </div>
        <div class="sttext"><a href="#"><strong>'
                    . Register::model()->findByPk($model->user_id)->name_first 
                    ." ". Register::model()->findByPk($model->user_id)->name_last 
                    . " ".   ' </strong></a> </br>' .
            $model->message .
                    
            '<div class="sttime">'. $date . '</div></div>
        <a href="#" class="delete" style="display: none; "> Remove</a>   
        <div id="box_comment' . $model->status_id . '" class="bxcomment">         

        </div>
        <form>
                <div id="status' . $model->status_id . '" class="rowcomment" >
                    <div class="rowcommentlt">
                        <a>
                            <img width="40" height="40" src="/nevergiveup/images/uploads/' . $json_data["picture"] . '">
                        </a>                                        
                        <textarea class ="text_area" id="txtComment' . $model->status_id . '"></textarea>
                        <br>
                    </div> 
                    <div class="bxcmtend">
                        <span class="tipcmtend"></span>
                        <span class="btncmtend">
                            <a class="comment_submit" 
                             id="' . $model->status_id . '"><em>Comment</em></a>             
                            
                        </span>
                    </div>
                </div>
            </form>
    </div> 

';




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
       /*  $dataProvider = new CActiveDataProvider('Status', array(
                    'criteria' => array(
                        'condition' => 'user_id=' . Yii::app()->user->id,                        
                    ),
                    'pagination' => array(
                        'pageSize' => 20,
                    ),
                ));
        // order status
        
        $dataProvider->sort->defaultOrder = 'status_id DESC';

        $this->render('status', array(
            'dataProvider' => $dataProvider,
                //  'model' => $model
        )); */
        $criteria = new CDbCriteria;
    	$total = Status::model()->count();
        // order 
        $criteria->order= 'status_id DESC';
    	
    	$pages = new CPagination($total);
    	$pages->pageSize = 20;
    	$pages->applyLimit($criteria);
    	
    	$status = Status::model()->findAll($criteria);
        
    	
    	$this->render('status_paging', array(
    			'status' => $status,
    			'pages' => $pages,
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

?>