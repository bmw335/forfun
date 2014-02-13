<?php
/* @var $this DefaultController */

$this->pageTitle=Yii::app()->name . ' - Management';
$this->breadcrumbs=array(
	'Management',
);
?>
测试信息：
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>
链接：
<h1>Management tools for <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Manage <a href="<?php echo Yii::app()->createUrl('admin/userManagement');?>">user accounts</a>.</p>
<p>Manage <a href="<?php echo Yii::app()->createUrl('admin/certificateManagement');?>">love certificates</a>.</p>
