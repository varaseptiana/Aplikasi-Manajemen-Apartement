<?php
/* @var $this JenisHubunganPenghuniController */
/* @var $data JenisHubunganPenghuni */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_hubungan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jenis_hubungan_id), array('view', 'id'=>$data->jenis_hubungan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jenis_hubungan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jenis_hubungan); ?>
	<br />


</div>