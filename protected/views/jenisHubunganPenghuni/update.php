<?php
/* @var $this JenisHubunganPenghuniController */
/* @var $model JenisHubunganPenghuni */

$this->breadcrumbs=array(
	'Jenis Hubungan Penghunis'=>array('index'),
	$model->jenis_hubungan_id=>array('view','id'=>$model->jenis_hubungan_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisHubunganPenghuni', 'url'=>array('index')),
	array('label'=>'Create JenisHubunganPenghuni', 'url'=>array('create')),
	array('label'=>'View JenisHubunganPenghuni', 'url'=>array('view', 'id'=>$model->jenis_hubungan_id)),
	array('label'=>'Manage JenisHubunganPenghuni', 'url'=>array('admin')),
);
?>

<h1>Update JenisHubunganPenghuni <?php echo $model->jenis_hubungan_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>