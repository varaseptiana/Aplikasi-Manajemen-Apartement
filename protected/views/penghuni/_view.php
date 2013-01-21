<?php
/* @var $this PenghuniController */
/* @var $data Penghuni */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('penghuni_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->penghuni_id), array('view', 'id'=>$data->penghuni_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_identitas_id')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_identitas_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_depan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_depan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_belakang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_belakang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_identitas')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_identitas); ?>
	<br />


</div>