<?php

/**
 * This is the model class for table "lc_user".
 *
 * The followings are the available columns in table 'lc_user':
 * @property integer $id
 * @property integer $role
 * @property string $qq_uid
 * @property string $user_name
 * @property string $password
 * @property string $real_name
 * @property string $nick_name
 * @property integer $is_male
 * @property string $email
 * @property string $birthday
 * @property string $register_time
 * @property integer $point
 * @property string $background_color
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lc_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nick_name', 'required'),
			array('role, is_male, point', 'numerical', 'integerOnly'=>true),
			array('qq_uid, email', 'length', 'max'=>320),
			array('user_name, password, real_name','background_color', 'length', 'max'=>64),
			array('nick_name', 'length', 'max'=>128),
			array('birthday, register_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, role, qq_uid, user_name, password, real_name, nick_name, is_male, email, birthday, register_time, point', 'safe', 'on'=>'search'),
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
			'role' => 'Role',
			'qq_uid' => 'Qq Uid',
			'user_name' => 'User Name',
			'password' => 'Password',
			'real_name' => 'Real Name',
			'nick_name' => 'Nick Name',
			'is_male' => 'Is Male',
			'email' => 'Email',
			'birthday' => 'Birthday',
			'register_time' => 'Register Time',
			'point' => 'Point',
			'background_color' => 'Background Color'
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
		$criteria->compare('role',$this->role);
		$criteria->compare('qq_uid',$this->qq_uid,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('real_name',$this->real_name,true);
		$criteria->compare('nick_name',$this->nick_name,true);
		$criteria->compare('is_male',$this->is_male);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('register_time',$this->register_time,true);
		$criteria->compare('point',$this->point);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
