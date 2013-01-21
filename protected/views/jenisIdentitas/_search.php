<?php
/* @var $this JenisIdentitasController */
/* @var $model JenisIdentitas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jenis_identitas_id'); ?>
		<?php echo $form->textField($model,'jenis_identitas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_jenis_identitas'); ?>
		<?php echo $form->textField($model,'nama_jenis_identitas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->