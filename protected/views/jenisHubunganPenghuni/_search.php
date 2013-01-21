<?php
/* @var $this JenisHubunganPenghuniController */
/* @var $model JenisHubunganPenghuni */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jenis_hubungan_id'); ?>
		<?php echo $form->textField($model,'jenis_hubungan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_jenis_hubungan'); ?>
		<?php echo $form->textField($model,'nama_jenis_hubungan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->