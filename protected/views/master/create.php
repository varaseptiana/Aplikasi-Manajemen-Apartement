<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Master', 'url'=>array('index')),
	array('label'=>'Manage Master', 'url'=>array('admin')),
);
?>

<h1>Create Master</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>