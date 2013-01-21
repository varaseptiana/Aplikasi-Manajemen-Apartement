<?php
/* @var $this JenisPerijinanController */
/* @var $data JenisPerijinan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_perijinan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jenis_perijinan_id), array('view', 'id'=>$data->jenis_perijinan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jenis_perijinan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jenis_perijinan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan_tambahan); ?>
	<br />


</div>