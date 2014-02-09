<?php

class CertController extends Controller
{
	//this action is just for debug test, later will be removed
	public function actionTestCert()
	{
		$name1 = Yii::app ()->request->getParam ( 'name1' );
		$name2 = Yii::app ()->request->getParam ( 'name2' );
	}
	
	/*
	 * create/edit the cert
	 */
	public function actionEditCert()
	{
		//get the draft cert from DB
		//bind the variable
		$cert_id = Yii::app ()->request->getParam ( 'cert_id' );
		if(isset($cert_id)){
			$certificate = Certificate::model()->findByPk($cert_id);
		}else{
			$certificate = new Certificate();
		}
		
		$this->render ( 'editCert', array (
				'certificate' => $certificate
		) );
	}
	
	public function actionSaveCert()
	{
		$cert_id = Yii::app ()->request->getParam ( 'cert_id' );
		$lover_1_name = Yii::app ()->request->getParam ( 'lover_1_name' );
		$lover_2_name = Yii::app ()->request->getParam ( 'lover_2_name' );
		$love_oath= Yii::app ()->request->getParam ( 'love_oath' );
		$count_down_month = Yii::app ()->request->getParam ( 'count_down_month' );
		
		//use activeRecord to save a dto
		
		if(!empty($cert_id)){
			$certificate = Certificate::model()->findByPk($cert_id);
		}else{
			$certificate = new Certificate();
		}
		//FIXME use mock user id
		$certificate->user_id = Yii::app()->params['mock_user_id'];
		$certificate->lover_1_name = $lover_1_name;
		$certificate->lover_2_name = $lover_2_name;
		$certificate->love_oath = $love_oath;
		$certificate->count_down_month = $count_down_month;
		//$lovecert->public_date = date ( 'Y-m-d H:i:s', time () );
		$certificate->create_time = date ( 'Y-m-d H:i:s', time () );
		
		//FIXME mock it
		$certificate->lover_1_province = "province";
		$certificate->lover_1_city = "city";
		$certificate->lover_2_province = "province";
		$certificate->lover_2_city = "city";
		$certificate->photo_path = "photo_path";
		
		//FIXME find a better way to handle the exception
		if(!$certificate->save()){
			throw new CHttpException ( 500, '数据库错误' );
		}
		$this->render ( 'saveCert');
	}
	
	public function actionDeleteCert()
	{
	
	}
	
	public function actionSubmitCert()
	{
	
	}
}