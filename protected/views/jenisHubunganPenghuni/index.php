<?php
/* @var $this JenisHubunganPenghuniController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Hubungan Penghunis',
);

$this->menu=array(
	array('label'=>'Create JenisHubunganPenghuni', 'url'=>array('create')),
	array('label'=>'Manage JenisHubunganPenghuni', 'url'=>array('admin')),
);
?>

<h1>Jenis Hubungan Penghunis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
