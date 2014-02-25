<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div>
	昵称：<?php echo Yii::app()->user->nick_name;?>
	<br/>
	积分:<?php echo $point;?>
	<br/>
	<?php if($cert_id == null){?>
	<a href="<?php echo Yii::app()->baseUrl; ?>/index.php/cert/editCert">创建证书</a>
	<?php }else if($is_draft == 1){?>
	<a href="<?php echo Yii::app()->baseUrl; ?>/index.php/cert/editCert?cert_id=<?php echo $cert_id;?>">继续编辑证书</a>
	<?php }else{?>
	<a href="<?php echo Yii::app()->baseUrl; ?>/index.php/cert/showCert?cert_id=<?php echo $cert_id;?>">查看证书</a>
	<?php }?>
</div>
