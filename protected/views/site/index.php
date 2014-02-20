<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<form method=post action="<?php echo Yii::app()->baseUrl; ?>/index.php/cert/searchCert" name="index_search_form">
	<div class="input-group input-group-lg" id="search-bar">
		  <input type="text" class="form-control" placeholder="他/她常用的名字或昵称">
		  <input type="hidden" name="province" id="province" class="form-control" placeholder="他/她所在的省份">
		  <input type="hidden" name="city" id="city" class="form-control" placeholder="他/她所在的城市"> 	
		  <!-- <span id="search-button" class="input-group-addon "></span> -->
		  <input type="submit"  id="search-button" class="input-group-addon " value=""/>
	</div>
</form> 	 



<div id="qq-login">
    <img src="<?php echo Yii::app()->baseUrl; ?>/img/qq-login.png" class="img-responsive" alt="Responsive image">   
</div>