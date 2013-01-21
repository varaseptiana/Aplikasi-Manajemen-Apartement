<?php
/* @var $this JenisUnitController */
/* @var $model JenisUnit */

$this->breadcrumbs=array(
	'Jenis Units'=>array('index'),
	$model->jenis_unit_id=>array('view','id'=>$model->jenis_unit_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisUnit', 'url'=>array('index')),
	array('label'=>'Create JenisUnit', 'url'=>array('create')),
	array('label'=>'View JenisUnit', 'url'=>array('view', 'id'=>$model->jenis_unit_id)),
	array('label'=>'Manage JenisUnit', 'url'=>array('admin')),
);
?>

<h1>Update JenisUnit <?php echo $model->jenis_unit_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>