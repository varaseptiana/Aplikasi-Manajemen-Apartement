<?php
/* @var $this JenisIdentitasController */
/* @var $data JenisIdentitas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_identitas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jenis_identitas_id), array('view', 'id'=>$data->jenis_identitas_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jenis_identitas')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jenis_identitas); ?>
	<br />


</div>