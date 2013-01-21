<?php
/* @var $this JenisPerijinanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Perijinans',
);

$this->menu=array(
	array('label'=>'Create JenisPerijinan', 'url'=>array('create')),
	array('label'=>'Manage JenisPerijinan', 'url'=>array('admin')),
);
?>

<h1>Jenis Perijinans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
