<?php
/* @var $this PenghuniController */
/* @var $model Penghuni */

$this->breadcrumbs=array(
	'Penghunis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Penghuni', 'url'=>array('index')),
	array('label'=>'Manage Penghuni', 'url'=>array('admin')),
);
?>

<h1>Create Penghuni</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>