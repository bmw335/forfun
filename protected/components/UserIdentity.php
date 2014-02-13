<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_isQqLogin;
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		if($this->_isQqLogin){
			$user = User::model()->find('qq_uid=:qq_uid',array(':qq_uid'=>$this->username));
			if($user == null){
				//new registered user, save it.
				$user = new User();
				$user->qq_uid = $this->username;
				$user->nick_name = "ImNormalUser";
				if(!$user->save()){
					throw new CHttpException ( 500, '数据库错误' );
				}
			}
			$user = User::model()->find('qq_uid=:qq_uid',array(':qq_uid'=>$this->username));
			$this->errorCode=self::ERROR_NONE;
		}else{
			$user = User::model()->find('user_name=:user_name AND password=:password',
				array(':user_name'=>$this->username, ':password'=>$this->password));
			if($user==null)
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			else
				$this->errorCode=self::ERROR_NONE;
		}
		$this->setState('id', $user->id);
		$this->setState('nick_name', $user->nick_name);
		$this->setState('role', $user->role);
		return !$this->errorCode;
		
		/*
		$admin=Admin::model()->find('user_name=:user_name AND password=:password',
			array(':user_name'=>$this->username, ':password'=>$this->password));
		if($admin==null)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
		*/
	}
	
	public function setIsQqLogin($isQqLogin){
		$this->_isQqLogin = $isQqLogin;
	}
}