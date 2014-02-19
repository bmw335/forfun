<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="input-group input-group-lg" id="search-bar">
  <form method=post action="<?php echo Yii::app()->baseUrl; ?>/index.php/cert/searchCert" name="index_search_form">
	<input type="text" name="name" id="name" class="form-control" placeholder="他/她常用的名字或昵称">
	<input type="text" name="province" id="province" class="form-control" placeholder="他/她所在的省份">
	<input type="text" name="city" id="city" class="form-control" placeholder="他/她所在的城市">
	<input type="submit"  id="search-button" class="input-group-addon " value="搜索"/>
	</form>
</div>


<div id="qq-login">
       
</div>