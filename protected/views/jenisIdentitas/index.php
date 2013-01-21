<?php
/* @var $this JenisIdentitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Identitases',
);

$this->menu=array(
	array('label'=>'Create JenisIdentitas', 'url'=>array('create')),
	array('label'=>'Manage JenisIdentitas', 'url'=>array('admin')),
);
?>

<h1>Jenis Identitases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
