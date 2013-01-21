<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	$model->id_master=>array('view','id'=>$model->id_master),
	'Update',
);

$this->menu=array(
	array('label'=>'List Master', 'url'=>array('index')),
	array('label'=>'Create Master', 'url'=>array('create')),
	array('label'=>'View Master', 'url'=>array('view', 'id'=>$model->id_master)),
	array('label'=>'Manage Master', 'url'=>array('admin')),
);
?>

<h1>Update Master <?php echo $model->id_master; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>