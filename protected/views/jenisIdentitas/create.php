<?php
/* @var $this JenisIdentitasController */
/* @var $model JenisIdentitas */

$this->breadcrumbs=array(
	'Jenis Identitases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisIdentitas', 'url'=>array('index')),
	array('label'=>'Manage JenisIdentitas', 'url'=>array('admin')),
);
?>

<h1>Create JenisIdentitas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>