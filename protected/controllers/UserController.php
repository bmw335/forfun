<?php

class UserController extends Controller
{
	public function filters()
	{
		return array(
				'accessControl', // perform access control for CRUD operations
		);
	}
	
	public function accessRules()
	{
		return array(
				array('allow',
						'actions'=>array('index', 'saveBackground'),
						'users'=>array('@'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}
	
	public function actionIndex()
	{
		//FIXME mock user_id temporarily
// 		$mock_user_id = Yii::app()->params['mock_user_id'];
		$cert_id = null;
		$is_draft = 1;
		$certificate = Certificate::model()->find('user_id=:user_id', array(':user_id' => Yii::app()->user->id));
		if($certificate){
			$cert_id = $certificate->id;
			$is_draft = $certificate->is_draft;
		}
		$user = User::model()->findByPk(Yii::app()->user->id);
		$this->render('index', array("cert_id" => $cert_id,
				"is_draft" => $is_draft,
				"point" => $user->point,
				"background_color" => $user->background_color
		));
	}
	
	public function actionSaveBackground()
	{
		$background = Yii::app ()->request->getParam ( 'background' );
		if(!empty($background)){
			$user = User::model()->findByPk(Yii::app()->user->id);
			$user -> background_color = $background;
			$user -> update();
		}
	}
	
	public function actionSaveProfile()
	{
		
	}
}