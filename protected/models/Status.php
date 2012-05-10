<?php

/**
 * This is the model class for table "status".
 *
 * The followings are the available columns in table 'status':
 * @property integer $status_id
 * @property string $message
 * @property string $created
 * @property integer $thumbs_up
 * @property integer $thumbs_down
 * @property string $reply
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property User $user
 * @property ThumbUpDown[] $thumbUpDowns
 */
class Status extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     *
     * @param string $className
     *        	active record class name.
     * @return Status the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     *
     * @return string the associated database table name
     */
    public function tableName() {
        return 'status';
    }

    /**
     *
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array(
                'message, created',
                'required'
            ),
            array(
                'thumbs_up, thumbs_down, user_id',
                'numerical',
                'integerOnly' => true
            ),
            array(
                'message',
                'length',
                'max' => 255
            ),
            array(
                'reply',
                'length',
                'max' => 45
            )
        );
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        // array('status_id, message, created, reply, user_id', 'safe', 'on' =>
        // 'search'),
    }

    /**
     *
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            // key to get user_id
            'user' => array(
                self::BELONGS_TO,
                'Register',
                'user_id'
            ),
            // key to get status + comment
            'comments' => array(
                self::HAS_MANY,
                'Comment',
                'status_id'
            ),
            // Dem so comment
            'commentCount' => array(
                self::STAT,
                'Comment',
                'comment_id'
            ),
            'thumbUpDowns' => array(
                self::HAS_MANY,
                'Thumb_up_down',
                'status_id'
            )
        );
    }

    /**
     *
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'status_id' => 'Status',
            'message' => 'Message',
            'created' => 'Created',
            'thumbs_up' => 'Thumbs Up',
            'thumbs_down' => 'Thumbs Down',
            'reply' => 'Reply',
            'user_id' => 'User'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * @return CActiveDataProvider the data provider that can return the models
     *         based on the search/filter conditions.
     */
    // public function search() {
    // // Warning: Please modify the following code to remove attributes that
    // // should not be searched.
    //
	// $criteria = new CDbCriteria;
    //
	// $criteria->compare('status_id', $this->status_id);
    // $criteria->compare('message', $this->message, true);
    // $criteria->compare('created', $this->created, true);
    // $criteria->compare('thumbs_up', $this->thumbs_up);
    // $criteria->compare('thumbs_down', $this->thumbs_down);
    // $criteria->compare('reply', $this->reply, true);
    // $criteria->compare('user_id', $this->user_id);
    //
	// return new CActiveDataProvider($this, array(
    // 'criteria' => $criteria,
    // ));
    // }

    public function getUrl() {
        return Yii::app()->createUrl('status', array(
                    'id' => $this->status_id,
                    'title' => $this->message
                ));
    }

    public function addComment($comment) {
        $comment->status_id = $this->status_id;
        $comment->created = date('Y-m-d H:i:s');
        return $comment->save();
    }

    public function getThumbUp($id) {
        $record = $this->findByAttributes(array(
            'status_id' => $id
                ));
        return array('up' => $record->thumbs_up, 'down' => $record->thumbs_down);

//        if ($name == 'up')
//            return $record->thumbs_up;
//        if ($name == 'down')
//            return $record->thumbs_down;
    }

    public function thumbsUpKick($id) {
        $status = $this->findByAttributes(array(
            'status_id' => $id
                ));
        if (count(ThumbUpDown::model()->findAllByAttributes(
                                array('friend_id' => Yii::app()->user->id,
                                    'status_id' => $status->status_id))) > 0 && $status->thumbs_up > 0) {
            $status->thumbs_up -=1;
            ThumbUpDown::model()->deleteAllByAttributes(
                    array('friend_id' => Yii::app()->user->id,
                        'status_id' => $status->status_id));
            $status->save();
        } else {
            $thumb = new ThumbUpDown();            
            $thumb->status_id = $status->status_id;
            $thumb->friend_id = Yii::app()->user->id;
            $status->thumbs_up += 1;
            $thumb->created = date("Y-m-d H:m:s");
            $thumb->save();
            $status->save();
        }
    }

    public function thumbsDownKick($id) {
        $status = $this->findByAttributes(array(
            'status_id' => $id
                ));

        if (count(ThumbUpDown::model()->findAllByAttributes(
                                array('friend_id' => Yii::app()->user->id,
                                    'status_id' => $status->status_id))) && $status->thumbs_down > 0) {
            $status->thumbs_down -=1;
            ThumbUpDown::model()->deleteAllByAttributes(
                    array('friend_id' => Yii::app()->user->id,
                        'status_id' => $status->status_id));
            $status->save();
        } else if (count(ThumbUpDown::model()->findAllByAttributes(
                                array('friend_id' => Yii::app()->user->id,
                                    'status_id' => $status->status_id))) == 0) {
            $thumb = new ThumbUpDown();
            $thumb->flag = 'down';
            $thumb->status_id = $status->status_id;
            $thumb->friend_id = Yii::app()->user->id;
            $status->thumbs_down += 1;
            $thumb->created = date("Y-m-d H:m:s");
            $thumb->save();
            $status->save();
        }
    }

}