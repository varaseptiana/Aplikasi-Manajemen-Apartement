<?php
/* @var $this JenisLayananController */
/* @var $model JenisLayanan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenis-layanan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_layanan_id'); ?>
		<?php echo $form->textField($model,'jenis_layanan_id'); ?>
		<?php echo $form->error($model,'jenis_layanan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_jenis_layanan'); ?>
		<?php echo $form->textField($model,'nama_jenis_layanan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_jenis_layanan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan_tambahan'); ?>
		<?php echo $form->textField($model,'keterangan_tambahan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keterangan_tambahan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->