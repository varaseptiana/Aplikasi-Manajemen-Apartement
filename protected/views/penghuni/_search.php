<?php
/* @var $this PenghuniController */
/* @var $model Penghuni */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'penghuni_id'); ?>
		<?php echo $form->textField($model,'penghuni_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_identitas_id'); ?>
		<?php echo $form->textField($model,'jenis_identitas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_depan'); ?>
		<?php echo $form->textField($model,'nama_depan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_belakang'); ?>
		<?php echo $form->textField($model,'nama_belakang',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_lahir'); ?>
		<?php echo $form->textField($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kelamin'); ?>
		<?php echo $form->textField($model,'kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomor_identitas'); ?>
		<?php echo $form->textField($model,'nomor_identitas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->