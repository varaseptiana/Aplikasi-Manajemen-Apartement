<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */

$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Karyawan', 'url'=>array('index')),
	array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Create Karyawan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>