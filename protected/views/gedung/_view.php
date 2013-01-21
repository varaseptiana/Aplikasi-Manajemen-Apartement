<?php
/* @var $this GedungController */
/* @var $data Gedung */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('gedung_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->gedung_id), array('view', 'id'=>$data->gedung_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_gedung')); ?>:</b>
	<?php echo CHtml::encode($data->nama_gedung); ?>
	<br />


</div>