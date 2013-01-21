<?php
/* @var $this MasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Masters',
);

$this->menu=array(
	array('label'=>'Create Master', 'url'=>array('create')),
	array('label'=>'Manage Master', 'url'=>array('admin')),
);
?>

<h1>Master</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
