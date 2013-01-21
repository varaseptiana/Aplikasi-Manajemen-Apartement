<?php
/* @var $this GedungController */
/* @var $model Gedung */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gedung-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gedung_id'); ?>
		<?php echo $form->textField($model,'gedung_id'); ?>
		<?php echo $form->error($model,'gedung_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_gedung'); ?>
		<?php echo $form->textField($model,'nama_gedung',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_gedung'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->