<?php

/**
 * This is the model class for table "lovecert".
 *
 * The followings are the available columns in table 'lovecert':
 * @property integer $id
 * @property string $lover_1_name
 * @property string $lover_2_name
 * @property string $promise
 * @property integer $countDownYear
 * @property string $public_date
 * @property integer $is_draft
 * @property string $timestamp
 */
class Lovecert extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lovecert';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lover_1_name, lover_2_name, public_date', 'required'),
			array('countDownYear, is_draft', 'numerical', 'integerOnly'=>true),
			array('lover_1_name, lover_2_name', 'length', 'max'=>20),
			array('promise', 'length', 'max'=>200),
			array('timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, lover_1_name, lover_2_name, promise, countDownYear, public_date, is_draft, timestamp', 'safe', 'on'=>'search'),
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
			'lover_1_name' => 'Lover 1 Name',
			'lover_2_name' => 'Lover 2 Name',
			'promise' => 'Promise',
			'countDownYear' => 'Count Down Year',
			'public_date' => 'Public Date',
			'is_draft' => 'Is Draft',
			'timestamp' => 'Timestamp',
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
		$criteria->compare('lover_1_name',$this->lover_1_name,true);
		$criteria->compare('lover_2_name',$this->lover_2_name,true);
		$criteria->compare('promise',$this->promise,true);
		$criteria->compare('countDownYear',$this->countDownYear);
		$criteria->compare('public_date',$this->public_date,true);
		$criteria->compare('is_draft',$this->is_draft);
		$criteria->compare('timestamp',$this->timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lovecert the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
