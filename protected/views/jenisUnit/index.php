<?php
/* @var $this JenisUnitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Units',
);

$this->menu=array(
	array('label'=>'Create JenisUnit', 'url'=>array('create')),
	array('label'=>'Manage JenisUnit', 'url'=>array('admin')),
);
?>

<h1>Jenis Units</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
