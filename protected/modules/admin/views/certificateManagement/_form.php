<?php
/* @var $this CertificateManagementController */
/* @var $model Certificate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'certificate-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_verified'); ?>
		<?php echo $form->textField($model,'is_verified'); ?>
		<?php echo $form->error($model,'is_verified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lover_1_name'); ?>
		<?php echo $form->textField($model,'lover_1_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'lover_1_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lover_1_province'); ?>
		<?php echo $form->textField($model,'lover_1_province',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'lover_1_province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lover_1_city'); ?>
		<?php echo $form->textField($model,'lover_1_city',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'lover_1_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lover_1_id_number'); ?>
		<?php echo $form->textField($model,'lover_1_id_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lover_1_id_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lover_2_name'); ?>
		<?php echo $form->textField($model,'lover_2_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lover_2_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lover_2_province'); ?>
		<?php echo $form->textField($model,'lover_2_province',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lover_2_province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lover_2_city'); ?>
		<?php echo $form->textField($model,'lover_2_city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lover_2_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lover_2_id_number'); ?>
		<?php echo $form->textField($model,'lover_2_id_number',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'lover_2_id_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo_path'); ?>
		<?php echo $form->textField($model,'photo_path',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'photo_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'love_oath'); ?>
		<?php echo $form->textField($model,'love_oath',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'love_oath'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'count_down_month'); ?>
		<?php echo $form->textField($model,'count_down_month'); ?>
		<?php echo $form->error($model,'count_down_month'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'public_date'); ?>
		<?php echo $form->textField($model,'public_date'); ?>
		<?php echo $form->error($model,'public_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_draft'); ?>
		<?php echo $form->textField($model,'is_draft'); ?>
		<?php echo $form->error($model,'is_draft'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'submit_time'); ?>
		<?php echo $form->textField($model,'submit_time'); ?>
		<?php echo $form->error($model,'submit_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->