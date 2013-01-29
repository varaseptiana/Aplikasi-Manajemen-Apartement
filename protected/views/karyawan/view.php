<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */

$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	$model->karyawan_id,
);

$this->menu=array(
	array('label'=>'List Karyawan', 'url'=>array('index')),
	array('label'=>'Create Karyawan', 'url'=>array('create')),
	array('label'=>'Update Karyawan', 'url'=>array('update', 'id'=>$model->karyawan_id)),
	array('label'=>'Delete Karyawan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->karyawan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>View Karyawan #<?php echo $model->karyawan_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'karyawan_id',
		array(
			'header' => 'jenis identitas',
			'name'=>'jenis_identitas_id',
			'value'=>jenisIdentitas::model()->findByPk($model->jenis_identitas_id)->nama_jenis_identitas,
		),
		'nomor_identitas',
		'nama_depan',
		'nama_belakang',
		array(
			'header' => 'kelamin',
			'name'=>'kelamin',
			'value'=>('kelamin == "1"')?'Pria':'Perempuan',
		),
		'alamat',
	),
)); ?>
