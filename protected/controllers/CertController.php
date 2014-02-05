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
			$lovecert = Lovecert::model()->findByPk($cert_id);
		}else{
			$lovecert = new Lovecert();
		}
		
		$this->render ( 'editCert', array (
				'lovecert' => $lovecert
		) );
	}
	
	public function actionSaveCert()
	{
		$cert_id = Yii::app ()->request->getParam ( 'cert_id' );
		$lover_1_name = Yii::app ()->request->getParam ( 'lover_1_name' );
		$lover_2_name = Yii::app ()->request->getParam ( 'lover_2_name' );
		$promise = Yii::app ()->request->getParam ( 'promise' );
		$countDownYear = Yii::app ()->request->getParam ( 'countDownYear' );
		
		//use activeRecord to save a dto
		
		if(isset($cert_id)){
			$lovecert = Lovecert::model()->findByPk($cert_id);
		}else{
			$lovecert = new Lovecert();
		}
		//FIXME use mock user id
		$lovecert->user_id = Yii::app()->params['mock_user_id'];
		$lovecert->lover_1_name = $lover_1_name;
		$lovecert->lover_2_name = $lover_2_name;
		$lovecert->promise = $promise;
		$lovecert->countDownYear = $countDownYear;
		//$lovecert->public_date = date ( 'Y-m-d H:i:s', time () );
		$lovecert->timestamp = date ( 'Y-m-d H:i:s', time () );
		
		//FIXME find a better way to handle the exception
		if(!$lovecert->save()){
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