<?php
/* @var $this JenisLayananController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Layanans',
);

$this->menu=array(
	array('label'=>'Create JenisLayanan', 'url'=>array('create')),
	array('label'=>'Manage JenisLayanan', 'url'=>array('admin')),
);
?>

<h1>Jenis Layanans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
