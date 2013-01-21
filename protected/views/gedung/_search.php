<?php
/* @var $this GedungController */
/* @var $model Gedung */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'gedung_id'); ?>
		<?php echo $form->textField($model,'gedung_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_gedung'); ?>
		<?php echo $form->textField($model,'nama_gedung',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->