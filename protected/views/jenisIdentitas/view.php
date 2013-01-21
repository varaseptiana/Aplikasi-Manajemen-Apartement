<?php
/* @var $this JenisIdentitasController */
/* @var $model JenisIdentitas */

$this->breadcrumbs=array(
	'Jenis Identitases'=>array('index'),
	$model->jenis_identitas_id,
);

$this->menu=array(
	array('label'=>'List JenisIdentitas', 'url'=>array('index')),
	array('label'=>'Create JenisIdentitas', 'url'=>array('create')),
	array('label'=>'Update JenisIdentitas', 'url'=>array('update', 'id'=>$model->jenis_identitas_id)),
	array('label'=>'Delete JenisIdentitas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jenis_identitas_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisIdentitas', 'url'=>array('admin')),
);
?>

<h1>View JenisIdentitas #<?php echo $model->jenis_identitas_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jenis_identitas_id',
		'nama_jenis_identitas',
	),
)); ?>
