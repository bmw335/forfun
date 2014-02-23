<?php

class CertController extends Controller
{
	//this action is just for debug test, later will be removed
	public function actionTestCert()
	{
		$name1 = Yii::app ()->request->getParam ( 'name1' );
		$name2 = Yii::app ()->request->getParam ( 'name2' );
	}
		
	//search certs
	public function actionSearchCert()
	{
		$lover_name = Yii::app ()->request->getParam ( 'name' );
		$lover_province = Yii::app ()->request->getParam ( 'province' );
		$lover_city = Yii::app ()->request->getParam ( 'city' );
		$allConditions = array('lover_name'=>$lover_name, 'lover_province'=>$lover_province, 'lover_city'=>$lover_city);
		
		// First, search by all 'name' 'province' 'city'. Expect there are results.
		$usedConditions = array('lover_name'=>$lover_name, 'lover_province'=>$lover_province, 'lover_city'=>$lover_city);
		
		$certificates = $this->searchCertByNameProvinceCity($usedConditions);
		
		// No search result. If city is not empty, remove city then search again to get similar results.
		if(count($certificates) === 0 && !$this->isNullOrEmptyString($lover_city )){
			$usedConditions = array('lover_name'=>$lover_name, 'lover_province'=>$lover_province);
			$certificates = $this->searchCertByNameProvince($usedConditions);
		}
		
		// No search result. If province is not empty, province city then search again to get similar results.
		if(count($certificates) === 0 && !$this->isNullOrEmptyString($lover_province )){
			$usedConditions = array('lover_name'=>$lover_name);
			$certificates = $this->searchCertByName($usedConditions);
		}
		
		// No search result. If name is not empty, search province only to get similar results.
		if(count($certificates) === 0 && !$this->isNullOrEmptyString($lover_name )){
			$usedConditions = array('lover_province'=>$lover_province);
			$certificates = $this->searchCertByProvince($usedConditions);
		}
		
		// No search result. If neither name nore province is empty, search all.
		if(count($certificates) === 0 && !$this->isNullOrEmptyString($lover_name ) && !$this->isNullOrEmptyString($lover_province )){
			$usedConditions = array();
			$certificates = $this->searchAllCert();
		}
		
		$this->render ( 'searchCert', array (
				'allConditions' => $allConditions,
				'usedConditions' => $usedConditions,
				'certificates' => $certificates
		) );
	}
	
	function isNullOrEmptyString($condition){
		return (!isset($condition) || trim($condition)==='');
	}
	
	function searchCertByNameProvinceCity($usedConditions){
		$requirement_where = 'is_draft = 0 and is_verified = 1 and public_date <= now() ';
		$lover_1_where = ''.$requirement_where;
		$lover_2_where = ''.$requirement_where;
		$params = array();
		if(!$this->isNullOrEmptyString($usedConditions['lover_name'])){
			$lover_1_where .= ' and lover_1_name like :lover_name';
			$lover_2_where .= ' and lover_2_name like :lover_name';
			$params[':lover_name'] = '%'.$usedConditions['lover_name'].'%';
		}
		if(!$this->isNullOrEmptyString($usedConditions['lover_province'])){
			$lover_1_where .= ' and lover_1_province = :lover_province';
			$lover_2_where .= ' and lover_2_province = :lover_province';
			$params[':lover_province'] = $usedConditions['lover_province'];
		}
		if(!$this->isNullOrEmptyString($usedConditions['lover_city'])){
			$lover_1_where .= ' and lover_1_city = :lover_city';
			$lover_2_where .= ' and lover_2_city = :lover_city';
			$params[':lover_city'] = $usedConditions['lover_city'];
		}
		$certificates = Yii::app()->db->createCommand()
			->select('*')
			->from('lc_certificate')
			->where($lover_1_where, $params)
			->orWhere($lover_2_where, $params)
			->queryAll();	
		return $certificates;
	}
	
	function searchCertByNameProvince($usedConditions){
		$requirement_where = 'is_draft = 0 and is_verified = 1 and public_date <= now() ';
		$lover_1_where = ''.$requirement_where;
		$lover_2_where = ''.$requirement_where;
		$params = array();
		if(!$this->isNullOrEmptyString($usedConditions['lover_name'])){
			$lover_1_where .= ' and lover_1_name like :lover_name';
			$lover_2_where .= ' and lover_2_name like :lover_name';
			$params[':lover_name'] = '%'.$usedConditions['lover_name'].'%';
		}
		if(!$this->isNullOrEmptyString($usedConditions['lover_province'])){
			$lover_1_where .= ' and lover_1_province = :lover_province';
			$lover_2_where .= ' and lover_2_province = :lover_province';
			$params[':lover_province'] = $usedConditions['lover_province'];
		}
		$certificates = Yii::app()->db->createCommand()
			->select('*')
			->from('lc_certificate')
			->where($lover_1_where, $params)
			->orWhere($lover_2_where, $params)
			->queryAll();
		return $certificates;
	}
	
	function searchCertByName($usedConditions){
		$requirement_where = 'is_draft = 0 and is_verified = 1 and public_date <= now() ';
		$lover_1_where = ''.$requirement_where;
		$lover_2_where = ''.$requirement_where;
		$params = array();
		if(!$this->isNullOrEmptyString($usedConditions['lover_name'])){
			$lover_1_where .= ' and lover_1_name like :lover_name';
			$lover_2_where .= ' and lover_2_name like :lover_name';
			$params[':lover_name'] = '%'.$usedConditions['lover_name'].'%';
		}
		$certificates = Yii::app()->db->createCommand()
			->select('*')
			->from('lc_certificate')
			->where($lover_1_where, $params)
			->orWhere($lover_2_where, $params)
			->queryAll();
		return $certificates;
	}
	
	function searchCertByProvince($usedConditions){
		$requirement_where = 'is_draft = 0 and is_verified = 1 and public_date <= now() ';
		$lover_1_where = ''.$requirement_where;
		$lover_2_where = ''.$requirement_where;
		$params = array();
		if(!$this->isNullOrEmptyString($usedConditions['lover_province'])){
			$lover_1_where .= ' and lover_1_province = :lover_province';
			$lover_2_where .= ' and lover_2_province = :lover_province';
			$params[':lover_province'] = $usedConditions['lover_province'];
		}
		$certificates = Yii::app()->db->createCommand()
			->select('*')
			->from('lc_certificate')
			->where($lover_1_where, $params)
			->orWhere($lover_2_where, $params)
			->queryAll();
		return $certificates;
	}
	
	function searchAllCert(){
		$requirement_where = 'is_draft = 0 and is_verified = 1 and public_date <= now() ';
		$certificates = Yii::app()->db->createCommand()
			->select('*')
			->from('lc_certificate')
			->where($requirement_where)
			->queryAll();
		return $certificates;
	}
		
	public function actionUploadImage(){
		$uploadHandler = new UploadHandler(null, false, null);
		$result = $uploadHandler->post();
		$splits = explode("/",$result["files"][0]->url);
		$fileName = $splits[count($splits)-1];
		return array("fileName" => $fileName);
	}
	
	public function actionGetImage(){
// 		$fileName = Yii::app()->request->getParam ( 'fileName' );
		$uploadHandler = new UploadHandler(null, false, null);
		$uploadHandler->get();
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
		$certificate = $this->getCertFromRequest();
		
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
		$certificate = $this->getCertFromRequest();
		if($this->validateBeforeSubmit($certificate)){
			$certificate->save();
			$response = array("result" => "ok",
					"cert_id" => $certificate->id);
		}else{
			$response = array("result" => "error");
		}
		echo json_encode($response);
	}
	
	private function validateBeforeSubmit($certificate){
		if(empty($certificate->lover_1_name) || empty($certificate->lover_1_province) || empty($certificate->lover_1_city)
		|| empty($certificate->lover_2_name) || empty($certificate->lover_2_province) || empty($certificate->lover_2_city)
		|| empty($certificate->love_oath) || empty($certificate->count_down_month)){
			return false;
		}
		return true;
	}
	
	private function getCertFromRequest(){
		$cert_id = Yii::app ()->request->getParam ( 'cert_id' );
		$uploadedImageName = Yii::app ()->request->getParam ( 'uploadedImageName' );
		
		$lover_1_name = Yii::app ()->request->getParam ( 'lover_1_name' );
		$lover_1_province = Yii::app ()->request->getParam ( 'lover_1_province' );
		$lover_1_city = Yii::app ()->request->getParam ( 'lover_1_city' );
		$lover_2_name = Yii::app ()->request->getParam ( 'lover_2_name' );
		$lover_2_province = Yii::app ()->request->getParam ( 'lover_2_province' );
		$lover_2_city = Yii::app ()->request->getParam ( 'lover_2_city' );
		
		$love_oath= Yii::app ()->request->getParam ( 'love_oath' );
		$count_down_month = Yii::app ()->request->getParam ( 'count_down_month' );
		
		//use activeRecord to save a dto
		
		if(!empty($cert_id)){
			$certificate = Certificate::model()->findByPk($cert_id);
		}else{
			$certificate = new Certificate();
		}
		$certificate->user_id = Yii::app()->user->id;
		$certificate->lover_1_name = $lover_1_name;
		$certificate->lover_1_province = $lover_1_province;
		$certificate->lover_1_city = $lover_1_city;
		$certificate->lover_2_name = $lover_2_name;
		$certificate->lover_2_province = $lover_2_province;
		$certificate->lover_2_city = $lover_2_city;
		$certificate->love_oath = $love_oath;
		$certificate->count_down_month = $count_down_month;
		//$lovecert->public_date = date ( 'Y-m-d H:i:s', time () );
		$certificate->create_time = date ( 'Y-m-d H:i:s', time () );
		$certificate->photo_path = $uploadedImageName;
		return $certificate;
	}
}
