<?php
/* @var $this JenisHubunganPenghuniController */
/* @var $model JenisHubunganPenghuni */

$this->breadcrumbs=array(
	'Jenis Hubungan Penghunis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisHubunganPenghuni', 'url'=>array('index')),
	array('label'=>'Manage JenisHubunganPenghuni', 'url'=>array('admin')),
);
?>

<h1>Create JenisHubunganPenghuni</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>