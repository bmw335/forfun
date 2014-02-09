<?php

/**
 * This is the model class for table "lc_certificate".
 *
 * The followings are the available columns in table 'lc_certificate':
 * @property integer $id
 * @property integer $user_id
 * @property integer $is_verified
 * @property string $lover_1_name
 * @property string $lover_1_province
 * @property string $lover_1_city
 * @property string $lover_1_id_number
 * @property string $lover_2_name
 * @property string $lover_2_province
 * @property string $lover_2_city
 * @property string $lover_2_id_number
 * @property string $photo_path
 * @property string $love_oath
 * @property integer $count_down_month
 * @property string $public_date
 * @property integer $is_draft
 * @property string $create_time
 * @property string $submit_time
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
			array('user_id, lover_1_name, lover_1_province, lover_1_city, lover_2_name, lover_2_province, lover_2_city, photo_path, love_oath, count_down_month', 'required'),
			array('user_id, is_verified, count_down_month, is_draft', 'numerical', 'integerOnly'=>true),
			array('lover_1_name, lover_1_province, lover_1_city', 'length', 'max'=>64),
			array('lover_1_id_number, lover_2_province, lover_2_city, photo_path', 'length', 'max'=>255),
			array('lover_2_name', 'length', 'max'=>20),
			array('lover_2_id_number', 'length', 'max'=>32),
			array('love_oath', 'length', 'max'=>200),
			array('public_date, create_time, submit_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, is_verified, lover_1_name, lover_1_province, lover_1_city, lover_1_id_number, lover_2_name, lover_2_province, lover_2_city, lover_2_id_number, photo_path, love_oath, count_down_month, public_date, is_draft, create_time, submit_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'is_verified' => 'Is Verified',
			'lover_1_name' => 'Lover 1 Name',
			'lover_1_province' => 'Lover 1 Province',
			'lover_1_city' => 'Lover 1 City',
			'lover_1_id_number' => 'Lover 1 Id Number',
			'lover_2_name' => 'Lover 2 Name',
			'lover_2_province' => 'Lover 2 Province',
			'lover_2_city' => 'Lover 2 City',
			'lover_2_id_number' => 'Lover 2 Id Number',
			'photo_path' => 'Photo Path',
			'love_oath' => 'Love Oath',
			'count_down_month' => 'Count Down Month',
			'public_date' => 'Public Date',
			'is_draft' => 'Is Draft',
			'create_time' => 'Create Time',
			'submit_time' => 'Submit Time',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('is_verified',$this->is_verified);
		$criteria->compare('lover_1_name',$this->lover_1_name,true);
		$criteria->compare('lover_1_province',$this->lover_1_province,true);
		$criteria->compare('lover_1_city',$this->lover_1_city,true);
		$criteria->compare('lover_1_id_number',$this->lover_1_id_number,true);
		$criteria->compare('lover_2_name',$this->lover_2_name,true);
		$criteria->compare('lover_2_province',$this->lover_2_province,true);
		$criteria->compare('lover_2_city',$this->lover_2_city,true);
		$criteria->compare('lover_2_id_number',$this->lover_2_id_number,true);
		$criteria->compare('photo_path',$this->photo_path,true);
		$criteria->compare('love_oath',$this->love_oath,true);
		$criteria->compare('count_down_month',$this->count_down_month);
		$criteria->compare('public_date',$this->public_date,true);
		$criteria->compare('is_draft',$this->is_draft);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('submit_time',$this->submit_time,true);

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
