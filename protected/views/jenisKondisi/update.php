<?php
/* @var $this JenisKondisiController */
/* @var $model JenisKondisi */

$this->breadcrumbs=array(
	'Jenis Kondisis'=>array('index'),
	$model->kondisi_id=>array('view','id'=>$model->kondisi_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisKondisi', 'url'=>array('index')),
	array('label'=>'Create JenisKondisi', 'url'=>array('create')),
	array('label'=>'View JenisKondisi', 'url'=>array('view', 'id'=>$model->kondisi_id)),
	array('label'=>'Manage JenisKondisi', 'url'=>array('admin')),
);
?>

<h1>Update JenisKondisi <?php echo $model->kondisi_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>