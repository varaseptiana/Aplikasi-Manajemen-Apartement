<?php
/* @var $this GedungController */
/* @var $model Gedung */

$this->breadcrumbs=array(
	'Gedungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gedung', 'url'=>array('index')),
	array('label'=>'Manage Gedung', 'url'=>array('admin')),
);
?>

<h1>Create Gedung</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>