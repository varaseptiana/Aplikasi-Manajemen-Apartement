<?php
/* @var $this JenisPerijinanController */
/* @var $model JenisPerijinan */

$this->breadcrumbs=array(
	'Jenis Perijinans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisPerijinan', 'url'=>array('index')),
	array('label'=>'Manage JenisPerijinan', 'url'=>array('admin')),
);
?>

<h1>Create JenisPerijinan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>