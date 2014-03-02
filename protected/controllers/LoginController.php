<?php
require_once(dirname(__FILE__)."/../API/qqConnectAPI.php");
class LoginController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionQqLogin()
	{	
		$code = Yii::app ()->request->getParam ( 'code' );
		$qc = new QC();
		if(empty($code)){
			$qc->qq_login();
		}else{
			$access_code = $qc->qq_callback();
			$openID = $qc->get_openid();
			
			$accessToken = $qc->get_access_token();
			$qc2 = new QC($accessToken, $openID);
			$result = $qc2->get_user_info();
			
			$userIdentity = new UserIdentity($openID,'');
			$userIdentity->setIsQqLogin(true);
			if($userIdentity->authenticate()){
				$userIdentity->setState("nick_name", $result["nickname"]);
				$userIdentity->setState("qq_icon", $result["figureurl_qq_1"]);
				Yii::app()->user->login($userIdentity);
				$this->redirect(Yii::app()->user->returnUrl);
			}else{
				echo $identity->errorMessage;
			}
		}
	}
	
	
	/*
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
	*/
}