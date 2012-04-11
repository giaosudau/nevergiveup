<?php

/**
 * This is the model class for table "profile".
 *
 * The followings are the available columns in table 'profile':
 * @property integer $profile_id
 * @property integer $user_id
 * @property string $rating
 * @property string $dob
 * @property string $nickname
 * @property string $about
 * @property string $relationship
 * @property string $looking_for
 * @property string $phone
 * @property string $interest
 * @property string $education
 * @property string $hobbies
 * @property string $created
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Profile extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Profile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('rating, nickname, relationship', 'length', 'max'=>45),
			array('about, looking_for, interest, education, hobbies', 'length', 'max'=>255),
			array('phone', 'length', 'max'=>100),
			array('dob, created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('profile_id, user_id, rating, dob, nickname, about, relationship, looking_for, phone, interest, education, hobbies, created', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'profile_id' => 'Profile',
			'user_id' => 'User',
			'rating' => 'Rating',
			'dob' => 'Dob',
			'nickname' => 'Nickname',
			'about' => 'About',
			'relationship' => 'Relationship',
			'looking_for' => 'Looking For',
			'phone' => 'Phone',
			'interest' => 'Interest',
			'education' => 'Education',
			'hobbies' => 'Hobbies',
			'created' => 'Created',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('profile_id',$this->profile_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('rating',$this->rating,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('relationship',$this->relationship,true);
		$criteria->compare('looking_for',$this->looking_for,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('interest',$this->interest,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('hobbies',$this->hobbies,true);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}