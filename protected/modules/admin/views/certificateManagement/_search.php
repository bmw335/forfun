<?php
/* @var $this CertificateManagementController */
/* @var $model Certificate */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_verified'); ?>
		<?php echo $form->textField($model,'is_verified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lover_1_name'); ?>
		<?php echo $form->textField($model,'lover_1_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lover_1_province'); ?>
		<?php echo $form->textField($model,'lover_1_province',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lover_1_city'); ?>
		<?php echo $form->textField($model,'lover_1_city',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lover_1_id_number'); ?>
		<?php echo $form->textField($model,'lover_1_id_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lover_2_name'); ?>
		<?php echo $form->textField($model,'lover_2_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lover_2_province'); ?>
		<?php echo $form->textField($model,'lover_2_province',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lover_2_city'); ?>
		<?php echo $form->textField($model,'lover_2_city',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lover_2_id_number'); ?>
		<?php echo $form->textField($model,'lover_2_id_number',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_path'); ?>
		<?php echo $form->textField($model,'photo_path',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'love_oath'); ?>
		<?php echo $form->textField($model,'love_oath',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_down_month'); ?>
		<?php echo $form->textField($model,'count_down_month'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'public_date'); ?>
		<?php echo $form->textField($model,'public_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_draft'); ?>
		<?php echo $form->textField($model,'is_draft'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'submit_time'); ?>
		<?php echo $form->textField($model,'submit_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->