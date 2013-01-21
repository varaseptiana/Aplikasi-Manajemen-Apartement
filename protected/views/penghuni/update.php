<?php
/* @var $this PenghuniController */
/* @var $model Penghuni */

$this->breadcrumbs=array(
	'Penghunis'=>array('index'),
	$model->penghuni_id=>array('view','id'=>$model->penghuni_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Penghuni', 'url'=>array('index')),
	array('label'=>'Create Penghuni', 'url'=>array('create')),
	array('label'=>'View Penghuni', 'url'=>array('view', 'id'=>$model->penghuni_id)),
	array('label'=>'Manage Penghuni', 'url'=>array('admin')),
);
?>

<h1>Update Penghuni <?php echo $model->penghuni_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>