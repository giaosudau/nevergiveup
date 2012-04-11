<?php

/**
 * This is the model class for table "friend".
 *
 * The followings are the available columns in table 'friend':
 * @property integer $friend_id
 * @property integer $subscriber
 * @property string $created
 * @property integer $user_id
 * @property integer $friend_list_id
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property FriendList $friendList
 * @property User $user
 * @property FriendList[] $friendLists
 * @property ThumbUpDown[] $thumbUpDowns
 */
class Friend extends CActiveRecord {
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Friend the static model class
     */

    const FRIEND_STATUS_ACCEPT = 1;
    const FRIEND_STATUS_WAITING = 2;
    const FRIEND_STATUS_DECLINE = 3;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'friend';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('subscriber, user_id, friend_list_id', 'numerical', 'integerOnly' => true),
            array('created', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('friend_id, subscriber, created, user_id, friend_list_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'comments' => array(self::HAS_MANY, 'Comment', 'friend_id'),
            'friendList' => array(self::BELONGS_TO, 'FriendList', 'friend_list_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'friendLists' => array(self::HAS_MANY, 'FriendList', 'friend_id'),
            'thumbUpDowns' => array(self::HAS_MANY, 'ThumbUpDown', 'friend_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'friend_id' => 'Friend',
            'subscriber' => 'Subscriber',
            'created' => 'Created',
            'user_id' => 'User',
            'friend_list_id' => 'Friend List',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('friend_id', $this->friend_id);
        $criteria->compare('subscriber', $this->subscriber);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('friend_list_id', $this->friend_list_id);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}