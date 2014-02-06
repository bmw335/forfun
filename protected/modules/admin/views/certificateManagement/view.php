<?php
/* @var $this CertificateManagementController */
/* @var $model Certificate */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->cid,
);

$this->menu=array(
	array('label'=>'List Certificate', 'url'=>array('index')),
	array('label'=>'Create Certificate', 'url'=>array('create')),
	array('label'=>'Update Certificate', 'url'=>array('update', 'id'=>$model->cid)),
	array('label'=>'Delete Certificate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Certificate', 'url'=>array('admin')),
);
?>

<h1>View Certificate #<?php echo $model->cid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cid',
		'uid_1',
		'uid_2',
		'photo_path',
		'photo_name',
		'love_oath',
		'create_time',
		'status',
		'publish_time',
		'visits',
	),
)); ?>
