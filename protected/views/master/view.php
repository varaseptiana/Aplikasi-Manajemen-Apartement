<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	$model->id_master,
);

$this->menu=array(
	array('label'=>'List Master', 'url'=>array('index')),
	array('label'=>'Create Master', 'url'=>array('create')),
	array('label'=>'Update Master', 'url'=>array('update', 'id'=>$model->id_master)),
	array('label'=>'Delete Master', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_master),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Master', 'url'=>array('admin')),
);
?>

<h1>View Master #<?php echo $model->id_master; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_master',
		'kategori',
	),
)); ?>
