<?php

/**
<<<<<<< Upstream, based on master
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $user_name
 * @property integer $point
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name', 'required'),
			array('point', 'numerical', 'integerOnly'=>true),
			array('user_name', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_name, point', 'safe', 'on'=>'search'),
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
			'user_name' => 'User Name',
			'point' => 'Point',
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
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('point',$this->point);
=======
 * This is the model class for table "lc_user".
 *
 * The followings are the available columns in table 'lc_user':
 * @property string $uid
 * @property string $family_name
 * @property string $given_name
 * @property string $nick_name
 * @property integer $is_male
 * @property string $email
 * @property string $birthday
 * @property string $register_time
 * @property string $nationality
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $town
 * @property string $organization
 * @property integer $identity_type
 * @property string $identity_id
 *
 * The followings are the available model relations:
 * @property Certificate[] $certificates
 * @property Certificate[] $certificates1
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
			array('family_name, given_name, birthday, register_time, nationality, country, province, city, town, organization, identity_type, identity_id', 'required'),
			array('is_male, identity_type', 'numerical', 'integerOnly'=>true),
			array('family_name, given_name, nationality, country, province, city, town, identity_id', 'length', 'max'=>32),
			array('nick_name', 'length', 'max'=>128),
			array('email', 'length', 'max'=>320),
			array('organization', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, family_name, given_name, nick_name, is_male, email, birthday, register_time, nationality, country, province, city, town, organization, identity_type, identity_id', 'safe', 'on'=>'search'),
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
			'certificates' => array(self::HAS_MANY, 'Certificate', 'uid_2'),
			'certificates1' => array(self::HAS_MANY, 'Certificate', 'uid_1'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'uid' => 'Uid',
			'family_name' => 'Family Name',
			'given_name' => 'Given Name',
			'nick_name' => 'Nick Name',
			'is_male' => 'Is Male',
			'email' => 'Email',
			'birthday' => 'Birthday',
			'register_time' => 'Register Time',
			'nationality' => 'Nationality',
			'country' => 'Country',
			'province' => 'Province',
			'city' => 'City',
			'town' => 'Town',
			'organization' => 'Organization',
			'identity_type' => 'Identity Type',
			'identity_id' => 'Identity',
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

		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('family_name',$this->family_name,true);
		$criteria->compare('given_name',$this->given_name,true);
		$criteria->compare('nick_name',$this->nick_name,true);
		$criteria->compare('is_male',$this->is_male);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('register_time',$this->register_time,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('town',$this->town,true);
		$criteria->compare('organization',$this->organization,true);
		$criteria->compare('identity_type',$this->identity_type);
		$criteria->compare('identity_id',$this->identity_id,true);
>>>>>>> fc4a245 refs #1 Add schema of [admin, user, certificate]. Admin can login and manage.

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
