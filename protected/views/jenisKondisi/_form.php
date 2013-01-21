<?php
/* @var $this JenisKondisiController */
/* @var $model JenisKondisi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenis-kondisi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kondisi_id'); ?>
		<?php echo $form->textField($model,'kondisi_id'); ?>
		<?php echo $form->error($model,'kondisi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kondisi'); ?>
		<?php echo $form->textField($model,'nama_kondisi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_kondisi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->