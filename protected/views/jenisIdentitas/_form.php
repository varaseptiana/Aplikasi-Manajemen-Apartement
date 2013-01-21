<?php
/* @var $this JenisIdentitasController */
/* @var $model JenisIdentitas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenis-identitas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_identitas_id'); ?>
		<?php echo $form->textField($model,'jenis_identitas_id'); ?>
		<?php echo $form->error($model,'jenis_identitas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_jenis_identitas'); ?>
		<?php echo $form->textField($model,'nama_jenis_identitas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_jenis_identitas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->