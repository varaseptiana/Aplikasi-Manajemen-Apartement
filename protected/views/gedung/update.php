<?php
/* @var $this GedungController */
/* @var $model Gedung */

$this->breadcrumbs=array(
	'Gedungs'=>array('index'),
	$model->gedung_id=>array('view','id'=>$model->gedung_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gedung', 'url'=>array('index')),
	array('label'=>'Create Gedung', 'url'=>array('create')),
	array('label'=>'View Gedung', 'url'=>array('view', 'id'=>$model->gedung_id)),
	array('label'=>'Manage Gedung', 'url'=>array('admin')),
);
?>

<h1>Update Gedung <?php echo $model->gedung_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>