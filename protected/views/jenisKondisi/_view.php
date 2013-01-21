<?php
/* @var $this JenisKondisiController */
/* @var $data JenisKondisi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kondisi_id), array('view', 'id'=>$data->kondisi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kondisi')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kondisi); ?>
	<br />


</div>