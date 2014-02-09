<?php

class UserController extends Controller
{
	public function actionIndex()
	{
		//FIXME mock user_id temporarily
		$mock_user_id = Yii::app()->params['mock_user_id'];
		$cert_id = null;
		$certificate = Certificate::model()->find('user_id=:user_id', array(':user_id' => $mock_user_id));
		if($certificate){
			$cert_id = $certificate->id;
		}
		$this->render('index', array("cert_id" => $cert_id));
	}
	
	public function actionSaveProfile()
	{
		
	}
}