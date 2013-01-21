<?php
/* @var $this PenghuniController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penghunis',
);

$this->menu=array(
	array('label'=>'Create Penghuni', 'url'=>array('create')),
	array('label'=>'Manage Penghuni', 'url'=>array('admin')),
);
?>

<h1>Penghunis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
