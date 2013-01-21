<?php
/* @var $this GedungController */
/* @var $model Gedung */

$this->breadcrumbs=array(
	'Gedungs'=>array('index'),
	$model->gedung_id,
);

$this->menu=array(
	array('label'=>'List Gedung', 'url'=>array('index')),
	array('label'=>'Create Gedung', 'url'=>array('create')),
	array('label'=>'Update Gedung', 'url'=>array('update', 'id'=>$model->gedung_id)),
	array('label'=>'Delete Gedung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->gedung_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gedung', 'url'=>array('admin')),
);
?>

<h1>View Gedung #<?php echo $model->gedung_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'gedung_id',
		'nama_gedung',
	),
)); ?>
