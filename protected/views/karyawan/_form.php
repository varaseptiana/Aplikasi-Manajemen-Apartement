<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'karyawan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'karyawan_id'); ?>
		<?php echo $form->textField($model,'karyawan_id'); ?>
		<?php echo $form->error($model,'karyawan_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'jenis_identitas_id'); ?>
		<?php echo $form->dropDownList($model,'jenis_identitas_id', CHtml::listData(jenisIdentitas::model()->findAll(), 'jenis_identitas_id',  'nama_jenis_identitas'),array('empety'=>'please select'));?>
		<?php echo $form->error($model,'jenis_identitas_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nomor_identitas'); ?>
		<?php echo $form->textField($model,'nomor_identitas'); ?>
		<?php echo $form->error($model,'nomor_identitas'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nama_depan'); ?>
		<?php echo $form->textField($model,'nama_depan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_depan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_belakang'); ?>
		<?php echo $form->textField($model,'nama_belakang',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_belakang'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'kelamin'); ?>
		<select selected="selected" name="Karyawan[kelamin]" id="Karyawan_kelamin">
		<option value="1">Pria</option>
		<option value="2">Perempuan</option>
		</select> 
		<?php //echo $form->textField($model,'kelamin'); ?>
		<?php //echo $form->error($model,'kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->