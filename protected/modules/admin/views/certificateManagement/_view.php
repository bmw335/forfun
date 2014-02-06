<?php
/* @var $this CertificateManagementController */
/* @var $data Certificate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cid), array('view', 'id'=>$data->cid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid_1')); ?>:</b>
	<?php echo CHtml::encode($data->uid_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid_2')); ?>:</b>
	<?php echo CHtml::encode($data->uid_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_path')); ?>:</b>
	<?php echo CHtml::encode($data->photo_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_name')); ?>:</b>
	<?php echo CHtml::encode($data->photo_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('love_oath')); ?>:</b>
	<?php echo CHtml::encode($data->love_oath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publish_time')); ?>:</b>
	<?php echo CHtml::encode($data->publish_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visits')); ?>:</b>
	<?php echo CHtml::encode($data->visits); ?>
	<br />

	*/ ?>

</div>