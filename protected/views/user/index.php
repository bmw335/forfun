<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div>
	刘峰
	<br/>
	积分:150
	<br/>
	<?php if($cert_id == null){?>
	<a href="<?php echo Yii::app()->baseUrl; ?>/index.php/cert/editCert">创建证书</a>
	<?php }else{?>
	<a href="<?php echo Yii::app()->baseUrl; ?>/index.php/cert/editCert?cert_id=<?php echo $cert_id;?>">继续编辑证书</a>
	<?php }?>
</div>
