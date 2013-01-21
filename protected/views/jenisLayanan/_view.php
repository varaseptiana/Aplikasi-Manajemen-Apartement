<?php
/* @var $this JenisLayananController */
/* @var $data JenisLayanan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_layanan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jenis_layanan_id), array('view', 'id'=>$data->jenis_layanan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jenis_layanan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jenis_layanan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan_tambahan); ?>
	<br />


</div>