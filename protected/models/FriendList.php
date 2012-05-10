<?php

/**
 * This is the model class for table "friend_list".
 *
 * The followings are the available columns in table 'friend_list':
 * @property integer $friend_list_id
 * @property string $name
 * @property integer $friend_id
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Friend[] $friends
 * @property User $user
 * @property Friend $friend
 */
class FriendList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FriendList the static model class
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
		return 'friend_list';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('friend_id, user_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('friend_list_id, name, friend_id, user_id', 'safe', 'on'=>'search'),
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
			'friends' => array(self::HAS_MANY, 'Friend', 'friend_list_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'friend' => array(self::BELONGS_TO, 'Friend', 'friend_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'friend_list_id' => 'Friend List',
			'name' => 'Name',
			'friend_id' => 'Friend',
			'user_id' => 'User',
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

		$criteria->compare('friend_list_id',$this->friend_list_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('friend_id',$this->friend_id);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}