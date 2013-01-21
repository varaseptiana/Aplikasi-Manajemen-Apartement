<?php
/* @var $this MasterController */
/* @var $data Master */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_master')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_master), array('view', 'id'=>$data->id_master)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori); ?>
	<br />


</div>