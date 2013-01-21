<?php
/* @var $this JenisUnitController */
/* @var $model JenisUnit */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenis-unit-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_unit_id'); ?>
		<?php echo $form->textField($model,'jenis_unit_id'); ?>
		<?php echo $form->error($model,'jenis_unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_jenis_unit'); ?>
		<?php echo $form->textField($model,'nama_jenis_unit',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_jenis_unit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->