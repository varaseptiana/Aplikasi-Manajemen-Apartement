<?php
/* @var $this JenisLayananController */
/* @var $model JenisLayanan */

$this->breadcrumbs=array(
	'Jenis Layanans'=>array('index'),
	$model->jenis_layanan_id,
);

$this->menu=array(
	array('label'=>'List JenisLayanan', 'url'=>array('index')),
	array('label'=>'Create JenisLayanan', 'url'=>array('create')),
	array('label'=>'Update JenisLayanan', 'url'=>array('update', 'id'=>$model->jenis_layanan_id)),
	array('label'=>'Delete JenisLayanan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jenis_layanan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisLayanan', 'url'=>array('admin')),
);
?>

<h1>View JenisLayanan #<?php echo $model->jenis_layanan_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jenis_layanan_id',
		'nama_jenis_layanan',
		'keterangan_tambahan',
	),
)); ?>
