<?php
/* @var $this JenisLayananController */
/* @var $model JenisLayanan */

$this->breadcrumbs=array(
	'Jenis Layanans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisLayanan', 'url'=>array('index')),
	array('label'=>'Manage JenisLayanan', 'url'=>array('admin')),
);
?>

<h1>Create JenisLayanan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>