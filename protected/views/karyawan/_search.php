<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'karyawan_id'); ?>
		<?php echo $form->textField($model,'karyawan_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'jenis_identitas_id'); ?>
		<?php echo $form->textField($model,'jenis_identitas_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'nomor_identitas'); ?>
		<?php echo $form->textField($model,'nomor_identitas'); ?>
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
		<?php echo $form->label($model,'kelamin'); ?>
		<?php echo $form->textField($model,'kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->