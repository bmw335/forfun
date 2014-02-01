<?php

class CertController extends Controller
{
	//this action is just for debug test, later will be removed
	public function actionTestCert()
	{
		$name1 = Yii::app ()->request->getParam ( 'name1' );
		$name2 = Yii::app ()->request->getParam ( 'name2' );
	}
}