<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */

$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	$model->karyawan_id=>array('view','id'=>$model->karyawan_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Karyawan', 'url'=>array('index')),
	array('label'=>'Create Karyawan', 'url'=>array('create')),
	array('label'=>'View Karyawan', 'url'=>array('view', 'id'=>$model->karyawan_id)),
	array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Update Karyawan <?php echo $model->karyawan_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>