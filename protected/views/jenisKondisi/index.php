<?php
/* @var $this JenisKondisiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Kondisis',
);

$this->menu=array(
	array('label'=>'Create JenisKondisi', 'url'=>array('create')),
	array('label'=>'Manage JenisKondisi', 'url'=>array('admin')),
);
?>

<h1>Jenis Kondisis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
