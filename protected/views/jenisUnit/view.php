<?php
/* @var $this JenisUnitController */
/* @var $model JenisUnit */

$this->breadcrumbs=array(
	'Jenis Units'=>array('index'),
	$model->jenis_unit_id,
);

$this->menu=array(
	array('label'=>'List JenisUnit', 'url'=>array('index')),
	array('label'=>'Create JenisUnit', 'url'=>array('create')),
	array('label'=>'Update JenisUnit', 'url'=>array('update', 'id'=>$model->jenis_unit_id)),
	array('label'=>'Delete JenisUnit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jenis_unit_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisUnit', 'url'=>array('admin')),
);
?>

<h1>View JenisUnit #<?php echo $model->jenis_unit_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jenis_unit_id',
		'nama_jenis_unit',
	),
)); ?>
