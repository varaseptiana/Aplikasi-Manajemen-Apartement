<?php
/* @var $this JenisHubunganPenghuniController */
/* @var $model JenisHubunganPenghuni */

$this->breadcrumbs=array(
	'Jenis Hubungan Penghunis'=>array('index'),
	$model->jenis_hubungan_id,
);

$this->menu=array(
	array('label'=>'List JenisHubunganPenghuni', 'url'=>array('index')),
	array('label'=>'Create JenisHubunganPenghuni', 'url'=>array('create')),
	array('label'=>'Update JenisHubunganPenghuni', 'url'=>array('update', 'id'=>$model->jenis_hubungan_id)),
	array('label'=>'Delete JenisHubunganPenghuni', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jenis_hubungan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisHubunganPenghuni', 'url'=>array('admin')),
);
?>

<h1>View JenisHubunganPenghuni #<?php echo $model->jenis_hubungan_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jenis_hubungan_id',
		'nama_jenis_hubungan',
	),
)); ?>
