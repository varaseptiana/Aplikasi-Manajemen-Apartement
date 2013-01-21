<?php
/* @var $this JenisUnitController */
/* @var $model JenisUnit */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jenis_unit_id'); ?>
		<?php echo $form->textField($model,'jenis_unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_jenis_unit'); ?>
		<?php echo $form->textField($model,'nama_jenis_unit',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->