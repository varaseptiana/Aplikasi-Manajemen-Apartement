<?php
/* @var $this JenisPerijinanController */
/* @var $model JenisPerijinan */

$this->breadcrumbs=array(
	'Jenis Perijinans'=>array('index'),
	$model->jenis_perijinan_id,
);

$this->menu=array(
	array('label'=>'List JenisPerijinan', 'url'=>array('index')),
	array('label'=>'Create JenisPerijinan', 'url'=>array('create')),
	array('label'=>'Update JenisPerijinan', 'url'=>array('update', 'id'=>$model->jenis_perijinan_id)),
	array('label'=>'Delete JenisPerijinan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jenis_perijinan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisPerijinan', 'url'=>array('admin')),
);
?>

<h1>View JenisPerijinan #<?php echo $model->jenis_perijinan_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jenis_perijinan_id',
		'nama_jenis_perijinan',
		'keterangan_tambahan',
	),
)); ?>
