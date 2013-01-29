<?php
/* @var $this KaryawanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Karyawans',
);

$this->menu=array(
	array('label'=>'Create Karyawan', 'url'=>array('create')),
	array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Karyawans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
