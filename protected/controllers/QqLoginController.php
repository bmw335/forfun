<?php

class QqLoginController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionLogin()
	{
		//FIXME mock qq OAuth2.0 workflow
		//step1 get Authorization Code
		//step2 get Access Token
		//step3 get OpenID
		
		//mock OpenID as 1234
		$openID = "qqOpenID_1234";
		$userIdentity = new UserIdentity($openID,'');
		$userIdentity->setIsQqLogin(true);
		if($userIdentity->authenticate()){
			Yii::app()->user->login($userIdentity);
			$this->redirect(Yii::app()->user->returnUrl);
		}else{
			echo $identity->errorMessage; 
		}
	}
}