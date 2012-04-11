<?php

/**
 * This is the model class for table "thumb_up_down".
 *
 * The followings are the available columns in table 'thumb_up_down':
 * @property integer $thumb_up_down_id
 * @property integer $flag
 * @property string $created
 * @property integer $status_id
 * @property integer $friend_id
 *
 * The followings are the available model relations:
 * @property Status $status
 * @property Friend $friend
 */
class ThumbUpDown extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Thumb_up_down the static model class
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
		return 'thumb_up_down';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('flag, status_id, friend_id', 'numerical', 'integerOnly'=>true),
			array('created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('thumb_up_down_id, flag, created, status_id, friend_id', 'safe', 'on'=>'search'),
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
			'status' => array(self::BELONGS_TO, 'Status', 'status_id'),
			'friend' => array(self::BELONGS_TO, 'Friend', 'friend_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'thumb_up_down_id' => 'Thumb Up Down',
			'flag' => 'Flag',
			'created' => 'Created',
			'status_id' => 'Status',
			'friend_id' => 'Friend',
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

		$criteria->compare('thumb_up_down_id',$this->thumb_up_down_id);
		$criteria->compare('flag',$this->flag);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('friend_id',$this->friend_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}