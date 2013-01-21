<?php
/* @var $this JenisKondisiController */
/* @var $model JenisKondisi */

$this->breadcrumbs=array(
	'Jenis Kondisis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisKondisi', 'url'=>array('index')),
	array('label'=>'Manage JenisKondisi', 'url'=>array('admin')),
);
?>

<h1>Create JenisKondisi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>