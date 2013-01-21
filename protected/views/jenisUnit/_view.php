<?php
/* @var $this JenisUnitController */
/* @var $data JenisUnit */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_unit_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jenis_unit_id), array('view', 'id'=>$data->jenis_unit_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jenis_unit')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jenis_unit); ?>
	<br />


</div>