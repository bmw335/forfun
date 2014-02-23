<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<script>
 function qqLogin()
 {
   //以下为按钮点击事件的逻辑。注意这里要重新打开窗口
   //否则后面跳转到QQ登录，授权页面时会直接缩小当前浏览器的窗口，而不是打开新窗口

   //官方demo  "_self" => "TencentLogin"
   var A=window.open("<?php echo Yii::app()->baseUrl; ?>/index.php/qqLogin/login","_self", 
   "width=450,height=320,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
 } 
</script>


<div class='raw image-grid'>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'ajaxUpdate'=>false,
	'summaryText'=>'',
	'itemView'=>'_view',
)); ?>
</div>



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
    <a href="#" onclick='qqLogin()'><img src="<?php echo Yii::app()->baseUrl; ?>/img/qq-login.png" class="img-responsive" alt="Responsive image"></a>   
</div>


<script type="text/javascript">
    QC.Login({
       btnId:"qqLoginBtn"    //插入按钮的节点id
});
</script>