<?php

/**
 * This is the model class for table "lc_password".
 *
 * The followings are the available columns in table 'lc_password':
 * @property integer $user_id
 * @property string $login_name
 * @property string $password
 * @property string $question1
 * @property string $answer1
 * @property string $question2
 * @property string $answer2
 * @property string $email
 */
class Password extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lc_password';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, login_name, password, question1, answer1, question2, answer2, email', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('login_name, password, question1, answer1, question2, answer2', 'length', 'max'=>256),
			array('email', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, login_name, password, question1, answer1, question2, answer2, email', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'login_name' => 'Login Name',
			'password' => 'Password',
			'question1' => 'Question1',
			'answer1' => 'Answer1',
			'question2' => 'Question2',
			'answer2' => 'Answer2',
			'email' => 'Email',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('login_name',$this->login_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('question1',$this->question1,true);
		$criteria->compare('answer1',$this->answer1,true);
		$criteria->compare('question2',$this->question2,true);
		$criteria->compare('answer2',$this->answer2,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Password the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
