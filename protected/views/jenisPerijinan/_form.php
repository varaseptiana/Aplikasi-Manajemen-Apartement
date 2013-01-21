<?php
/* @var $this JenisPerijinanController */
/* @var $model JenisPerijinan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenis-perijinan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_perijinan_id'); ?>
		<?php echo $form->textField($model,'jenis_perijinan_id'); ?>
		<?php echo $form->error($model,'jenis_perijinan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_jenis_perijinan'); ?>
		<?php echo $form->textField($model,'nama_jenis_perijinan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_jenis_perijinan'); ?>
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