<?php
/* @var $this JenisUnitController */
/* @var $model JenisUnit */

$this->breadcrumbs=array(
	'Jenis Units'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisUnit', 'url'=>array('index')),
	array('label'=>'Manage JenisUnit', 'url'=>array('admin')),
);
?>

<h1>Create JenisUnit</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>