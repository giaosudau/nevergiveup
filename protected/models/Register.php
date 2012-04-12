<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $name_first
 * @property string $name_last
 * @property string $email
 * @property string $picture
 * @property integer $active
 * @property string $created
 */
class Register extends CActiveRecord {
    public $password_repeat;
	
	/**
	 * Returns the static model of the specified AR class.
	 *
	 * @param string $className
	 *        	active record class name.
	 * @return Register the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
	
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'user';
	}
	
	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				// array('username, password, name_first, name_last, email,
				// active, created', 'required'),
				array (
						'username, password,password_repeat, name_first, name_last, email',
						'required' 
				),
				array (
						'active',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'username, password, name_first, name_last',
						'length',
						'max' => 45 
				),
				array (
						'email',
						'length',
						'max' => 100 
				),
				array (
						'picture',
						'length',
						'max' => 255 
				),
                                array('email, username','unique'),
                                array('password','compare'),
                                array('password_repeat','safe'),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array (
						'username, name_first, name_last, email',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	
	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array (
				'friends' => array (
						self::HAS_MANY,
						'Friend',
						'user_id' 
				),
				'friendLists' => array (
						self::HAS_MANY,
						'FriendList',
						'user_id' 
				),
				'notifications' => array (
						self::HAS_MANY,
						'Notification',
						'user_id' 
				),
				'profiles' => array (
						self::HAS_MANY,
						'Profile',
						'user_id' 
				),
				'statuses' => array (
						self::HAS_MANY,
						'Status',
						'user_id' 
				) 
		);
	}
	
	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'user_id' => 'User',
				'username' => 'Username',
				'password' => 'Password',
                                'password_repeat' =>'Password Repeat', 
				'name_first' => 'Name First',
				'name_last' => 'Name Last',
				'email' => 'Email',
				'picture' => 'Picture',
				'active' => 'Active',
				'created' => 'Created' 
		);
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 *         based on the search/filter conditions.
	 */
	public function search() {
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		
		$criteria = new CDbCriteria ();
		
		// $criteria->compare('user_id', $this->user_id);
		$criteria->compare ( 'username', $this->username, true );
		// $criteria->compare('password', $this->password, true);
		$criteria->compare ( 'name_first', $this->name_first, true );
		$criteria->compare ( 'name_last', $this->name_last, true );
		$criteria->compare ( 'email', $this->email, true );
		// $criteria->compare('picture', $this->picture, true);
		// $criteria->compare('active', $this->active);
		// $criteria->compare('created', $this->created, true);
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	
	// encrypt password
	public function getUrl() {
		return Yii::app()->createUrl('register/'. $this->user_id);
	}
	public function beforeSave() {
		$this->created = date ( 'Y-m-d H:i:s' );
		$this->password = md5 ( $this->password );
		$this->active = 1;
		$this->picture = '';
		return true;
	}
	
	public function addFriend(){
	  $command = FriendList::model()->findByAttributes(array("user_id" => $this->user_id));
          return $command->friend_list_id;
	}
	

}