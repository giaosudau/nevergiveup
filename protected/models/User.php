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
class User extends CActiveRecord {
	/**
	 * Returns the static model of the specified AR class.
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return User the static model class
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
				array (
						'user_id, username, password, name_first, name_last, email, picture, active, created',
						'required' 
				),
				array (
						'user_id, active',
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
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array (
						'user_id, username, password, name_first, name_last, email, picture, active, created',
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
		return array ();
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
		
		$criteria->compare ( 'user_id', $this->user_id );
		$criteria->compare ( 'username', $this->username, true );
		$criteria->compare ( 'password', $this->password, true );
		$criteria->compare ( 'name_first', $this->name_first, true );
		$criteria->compare ( 'name_last', $this->name_last, true );
		$criteria->compare ( 'email', $this->email, true );
		$criteria->compare ( 'picture', $this->picture, true );
		$criteria->compare ( 'active', $this->active );
		$criteria->compare ( 'created', $this->created, true );
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
}