<?php

/**
 * This is the model class for table "lc_certificate".
 *
 * The followings are the available columns in table 'lc_certificate':
 * @property string $cid
 * @property string $uid_1
 * @property string $uid_2
 * @property string $photo_path
 * @property string $photo_name
 * @property string $love_oath
 * @property string $create_time
 * @property integer $status
 * @property string $publish_time
 * @property integer $visits
 *
 * The followings are the available model relations:
 * @property User $uid2
 * @property User $uid1
 */
class Certificate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lc_certificate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid_1, uid_2, love_oath, create_time, publish_time, visits', 'required'),
			array('status, visits', 'numerical', 'integerOnly'=>true),
			array('uid_1, uid_2', 'length', 'max'=>10),
			array('photo_path', 'length', 'max'=>256),
			array('photo_name', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cid, uid_1, uid_2, photo_path, photo_name, love_oath, create_time, status, publish_time, visits', 'safe', 'on'=>'search'),
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
			'uid2' => array(self::BELONGS_TO, 'User', 'uid_2'),
			'uid1' => array(self::BELONGS_TO, 'User', 'uid_1'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cid' => 'Cid',
			'uid_1' => 'User ID of the certificate creator',
			'uid_2' => 'User ID of the Beloved',
			'photo_path' => 'Photo Path',
			'photo_name' => 'Photo Name',
			'love_oath' => 'Love Oath',
			'create_time' => 'Create Time',
			'status' => 'Status',
			'publish_time' => 'Publish Time',
			'visits' => 'Visits',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('uid_1',$this->uid_1,true);
		$criteria->compare('uid_2',$this->uid_2,true);
		$criteria->compare('photo_path',$this->photo_path,true);
		$criteria->compare('photo_name',$this->photo_name,true);
		$criteria->compare('love_oath',$this->love_oath,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('publish_time',$this->publish_time,true);
		$criteria->compare('visits',$this->visits);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Certificate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
