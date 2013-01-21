<?php
/* @var $this JenisKondisiController */
/* @var $model JenisKondisi */

$this->breadcrumbs=array(
	'Jenis Kondisis'=>array('index'),
	$model->kondisi_id,
);

$this->menu=array(
	array('label'=>'List JenisKondisi', 'url'=>array('index')),
	array('label'=>'Create JenisKondisi', 'url'=>array('create')),
	array('label'=>'Update JenisKondisi', 'url'=>array('update', 'id'=>$model->kondisi_id)),
	array('label'=>'Delete JenisKondisi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kondisi_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisKondisi', 'url'=>array('admin')),
);
?>

<h1>View JenisKondisi #<?php echo $model->kondisi_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kondisi_id',
		'nama_kondisi',
	),
)); ?>
