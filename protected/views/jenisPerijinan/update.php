<?php
/* @var $this JenisPerijinanController */
/* @var $model JenisPerijinan */

$this->breadcrumbs=array(
	'Jenis Perijinans'=>array('index'),
	$model->jenis_perijinan_id=>array('view','id'=>$model->jenis_perijinan_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisPerijinan', 'url'=>array('index')),
	array('label'=>'Create JenisPerijinan', 'url'=>array('create')),
	array('label'=>'View JenisPerijinan', 'url'=>array('view', 'id'=>$model->jenis_perijinan_id)),
	array('label'=>'Manage JenisPerijinan', 'url'=>array('admin')),
);
?>

<h1>Update JenisPerijinan <?php echo $model->jenis_perijinan_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>