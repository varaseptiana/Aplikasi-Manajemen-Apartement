<?php
/* @var $this JenisLayananController */
/* @var $model JenisLayanan */

$this->breadcrumbs=array(
	'Jenis Layanans'=>array('index'),
	$model->jenis_layanan_id=>array('view','id'=>$model->jenis_layanan_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisLayanan', 'url'=>array('index')),
	array('label'=>'Create JenisLayanan', 'url'=>array('create')),
	array('label'=>'View JenisLayanan', 'url'=>array('view', 'id'=>$model->jenis_layanan_id)),
	array('label'=>'Manage JenisLayanan', 'url'=>array('admin')),
);
?>

<h1>Update JenisLayanan <?php echo $model->jenis_layanan_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>