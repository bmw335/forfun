<?php
/* @var $this CertificateManagementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Management'=>'index.php?r=admin',
	'Certificates',
);

$this->menu=array(
	array('label'=>'Create Certificate', 'url'=>array('create')),
	array('label'=>'Manage Certificate', 'url'=>array('admin')),
);
?>

<h1>Love Certificates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
