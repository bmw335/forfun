<?php
/* @var $this CertificateManagementController */
/* @var $model Certificate */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Certificate', 'url'=>array('index')),
	array('label'=>'Create Certificate', 'url'=>array('create')),
	array('label'=>'Update Certificate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Certificate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Certificate', 'url'=>array('admin')),
);
?>

<h1>View Certificate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'is_verified',
		'lover_1_name',
		'lover_1_province',
		'lover_1_city',
		'lover_1_id_number',
		'lover_2_name',
		'lover_2_province',
		'lover_2_city',
		'lover_2_id_number',
		'photo_path',
		'love_oath',
		'count_down_month',
		'public_date',
		'is_draft',
		'create_time',
		'submit_time',
	),
)); ?>
