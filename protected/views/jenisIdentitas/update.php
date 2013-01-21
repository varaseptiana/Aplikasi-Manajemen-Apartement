<?php
/* @var $this JenisIdentitasController */
/* @var $model JenisIdentitas */

$this->breadcrumbs=array(
	'Jenis Identitases'=>array('index'),
	$model->jenis_identitas_id=>array('view','id'=>$model->jenis_identitas_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisIdentitas', 'url'=>array('index')),
	array('label'=>'Create JenisIdentitas', 'url'=>array('create')),
	array('label'=>'View JenisIdentitas', 'url'=>array('view', 'id'=>$model->jenis_identitas_id)),
	array('label'=>'Manage JenisIdentitas', 'url'=>array('admin')),
);
?>

<h1>Update JenisIdentitas <?php echo $model->jenis_identitas_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>