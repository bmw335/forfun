<?php
/* @var $this CertificateManagementController */
/* @var $data Certificate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_verified')); ?>:</b>
	<?php echo CHtml::encode($data->is_verified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lover_1_name')); ?>:</b>
	<?php echo CHtml::encode($data->lover_1_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lover_1_province')); ?>:</b>
	<?php echo CHtml::encode($data->lover_1_province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lover_1_city')); ?>:</b>
	<?php echo CHtml::encode($data->lover_1_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lover_1_id_number')); ?>:</b>
	<?php echo CHtml::encode($data->lover_1_id_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lover_2_name')); ?>:</b>
	<?php echo CHtml::encode($data->lover_2_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lover_2_province')); ?>:</b>
	<?php echo CHtml::encode($data->lover_2_province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lover_2_city')); ?>:</b>
	<?php echo CHtml::encode($data->lover_2_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lover_2_id_number')); ?>:</b>
	<?php echo CHtml::encode($data->lover_2_id_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_path')); ?>:</b>
	<?php echo CHtml::encode($data->photo_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('love_oath')); ?>:</b>
	<?php echo CHtml::encode($data->love_oath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_down_month')); ?>:</b>
	<?php echo CHtml::encode($data->count_down_month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('public_date')); ?>:</b>
	<?php echo CHtml::encode($data->public_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_draft')); ?>:</b>
	<?php echo CHtml::encode($data->is_draft); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('submit_time')); ?>:</b>
	<?php echo CHtml::encode($data->submit_time); ?>
	<br />

	*/ ?>

</div>