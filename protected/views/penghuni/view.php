<?php
/* @var $this PenghuniController */
/* @var $model Penghuni */

$this->breadcrumbs=array(
	'Penghunis'=>array('index'),
	$model->penghuni_id,
);

$this->menu=array(
	array('label'=>'List Penghuni', 'url'=>array('index')),
	array('label'=>'Create Penghuni', 'url'=>array('create')),
	array('label'=>'Update Penghuni', 'url'=>array('update', 'id'=>$model->penghuni_id)),
	array('label'=>'Delete Penghuni', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->penghuni_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Penghuni', 'url'=>array('admin')),
);
?>

<h1>View Penghuni #<?php echo $model->penghuni_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'penghuni_id',
		//'jenis_identitas_id',
		array(
			'header' => 'jenis identitas',
			'name'=>'jenis_identitas_id',
			'value'=>jenisIdentitas::model()->findByPk($model->jenis_identitas_id)->nama_jenis_identitas,
		),
		'nomor_identitas',
		'nama_depan',
		'nama_belakang',
		'tanggal_lahir',
		array(
			'header' => 'kelamin',
			'name'=>'kelamin',
			'value'=>('kelamin == "1"')?'Pria':'Perempuan',
		),
	),
)); ?>
